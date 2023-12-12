<?php
class AdminsController
{
    /**------------------------------------------------------------------------------------------------
     *                                     admins login
     *  allows admins to log into administrative pages?
     *@param loginAdminEmail  POST  
     *@param password_admin POST
     *@return type
     *------------------------------------------------------------------------------------------------**/
    public function login()
    {
        if (isset($_POST["loginAdminEmail"])) {
            echo '<script>
            fncMaterialPreloader("on");
            //fncSweetAlert("loading","","");
            </script>';


            if (preg_match('/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/', $_POST["loginAdminEmail"])) {
                $url = "admins?login=true&suffix=admin";
                $method = "POST";
                $fileds = array(
                    "email_admin" => $_POST["loginAdminEmail"],
                    "password_admin" => $_POST["loginAdminPass"]
                );
                $login = CurlController::request($url, $method, $fileds);
                if ($login->status == 200) {
                    $_SESSION["admin"] = $login->results[0];
                    echo '<script>
                    location.reload();    
                    </script>';
                } else {
                    echo //'<div class="alert alert-danger mt-3">' . $login->results . '</div> 
                    '<script>
                            fncNotie("error","Error:' . $login->results . '");
                            //fncSweetAlert("error","Error: ' . $login->results . '","");
                            //fncToastr("error","Error: ' . $login->results . '")
                            fncMaterialPreloader("off");
                            fncFormatInputs();
                        </script>
                    ';
                }
            } else {
                echo //'<div class="alert alert-danger mt-3">' . $login->results . '</div> 
                '<script>
                            fncNotie("error","Error: sintax not valid");
                            //fncSweetAlert("error","Error: ,"");
                            //fncToastr("error","Error:,");
                            fncMaterialPreloader("off");
                            fncFormatInputs();
                        </script>
                    ';
            }

            //echo '<pre>';print_r($login);echo '</pre>';
        }
    }

    /**----------------------
     **   Recuperar contraseña
     *@param name type  
     *@return type
     *------------------------**/
    public function resetPassword()
    {
        if (isset($_POST['resetPassword'])) {
            /**----------------------
             *    checando la sintaxis del correo
             *------------------------**/
            if (preg_match('/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/', $_POST["resetPassword"])) {
                /**=======================
                 *     checando si el usuario está registrado en DB
                 *========================**/

                $url = "admins?linkTo=email_admin&equalTo=" . $_POST["resetPassword"] . "&select=id_admin";
                $method = "GET";
                $fields = array();
                $admin = CurlController::request($url, $method, $fields);

                /**=======================
                 *        200= A USUARIO EXISTENTE
                 *        404= USUARIO NO EXISTENTE
                 *========================**/
                if ($admin->status == 200) {
                    /**----------------------
                     * generando contraseña aleatoria
                     *------------------------**/
                    function genPassword($length){
                        $password="";
                        $chain="0123456789abcdefghijklmnopqrstuvwxyz";
                        $password= substr(str_shuffle($chain),0,$length);
                        return $password;
                    }
                    $newPassword=genPassword(11);
                    $crypt = crypt($newPassword, '$2a$07$azybxcags23425sdg23sdfhsd$');
                    /**----------------------
                     * actualizando contraseña en bd
                     *------------------------**/
                    $url="admins?id=".$admin->results[0]->id_admin."&nameId=id_admin&token=no&except=password_admin";
                    $method="PUT";
                    $fields="password_admin".$crypt;
                    $updatePassword=CurlController::request($url, $method, $fields);
                    if($updatePassword->status==200){
                        
                    }    
                } else {
                    echo //'<div class="alert alert-danger mt-3">' . $login->results . '</div> 
                    '<script>
                                fncFormatInputs();            
                                fncNotie("error","Correo no registrado");
                            </script>
                        ';
                }
            }
        }
    }
}

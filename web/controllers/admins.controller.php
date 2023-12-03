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
                        fncNotie("error","Error: ' . $login->results . '");
                        //fncSweetAlert("error","Error: ' . $login->results . '","");
                        //fncToastr("error","Error: ' . $login->results . '")
                        fncMaterialPreloader("off");
                        fncFormatInputs();
                    </script>
                ';
            }

            //echo '<pre>';print_r($login);echo '</pre>';
        }
    }
}

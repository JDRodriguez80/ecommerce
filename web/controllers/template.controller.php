<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class TemplateController
{

  /*============================================
        llama a la vista principal del la plantilla
        ============================================== */

  public function index()
  {
    include "views/template.php";
  }

  /*====================================
        ruta o dominio del sitio
    ===================================== */

  static public function path()
  {

    if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])) {
      return "https://" . $_SERVER["SERVER_NAME"] . "/";
    } else {
      return "http://" . $_SERVER["SERVER_NAME"] . "/";
    }
  }
  /*/**--------------------------
     * funcion para enviar correo**
     *---------------------------**/

  static public function sendEmail($subject, $email, $title, $message, $link)
  {
    date_default_timezone_set("America/Matamoros");
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';
    /**-----------------------
     * todo al subir el sistema al hosting
     *------------------------**/
    //$mail->Encoding='base64';
    $mail->isMail();
    $mail->UseSendmailOptions = 0;
    $mail->setFrom("noreplay@ecommerce.com", "Ecommerce");
    $mail->Subject = $subject;
    $mail->addAddress($email);

    $mail->msgHTML('<div
        style="
          width: 100%;
          background: #eee;
          position: relative;
          font-family: sans-serif;
          padding-top: 40px;
          padding-bottom: 40px;
        ">
        <div
          style="
            position: relative;
            margin: auto;
            width: 600px;
            background: white;
            padding: 20px;
          ">
          <center>
            <img
              src="' . TemplateController::path() . 'views/assets/img/template/1/logo.png"
              style="padding: 20px; width: 30%" />
            <h3 style="font-weight: 100; color: #999">
                ' . $title . '
            </h3>
            <hr style="border: 1px solid #ccc; width: 80%" />
            ' . $message . '
            <a
              href="' . $link . '"
              target="_blank"
              style="text-decoration: none">
              <div
                style="
                  line-height: 25px;
                  background: #000;
                  width: 60%;
                  padding: 10px;
                  color: white;
                  border-radius: 5px;
                ">
                Haz click aqui
              </div>
            </a>
            <hr style="border: 1px solid #ccc; width: 80%" />
            <h5 style="font-weight: 100; color: #999">
              Si no solicitó el envio de este correo, favor de comunicarse con
              nosotros de inmediato.
            </h5>
          </center>
        </div>
      </div>');

    $send = $mail->Send();

    if (!$send) {

      //return $mail->ErrorInfo;
      echo '<pre>';
      print_r('error al envio');
      echo '</pre>';
    } else {
      echo '<pre>';
      print_r('exito al envio');
      echo '</pre>';
      return  "ok";
    }
  }
}

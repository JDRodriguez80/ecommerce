<?php
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
}

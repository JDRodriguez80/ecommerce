<?php

/**--------------------------------------------
 **               session variables initilization
 *---------------------------------------------**/
ob_start();
session_start();

/**----------------------
 **      route variable
 *------------------------**/
$path = TemplateController::path();

/**----------------------
 **      capture url routes
 *------------------------**/
$routesArray = explode("/", $_SERVER["REQUEST_URI"]);
array_shift($routesArray);
foreach ($routesArray as $key => $value) {
  $routesArray[$key] = explode("?", $value)[0];
}
//echo '<pre>'; print_r($routesArray); echo '</pre>';

/**----------------------
 **      template GET request
 *------------------------**/
$url = "templates?linkTo=active_template&equalTo=ok";
$method = "GET";
$fields = array();
$template = CurlController::request($url, $method, $fields);

if ($template->status == 200) {
  $template = $template->results[0];
} else {
  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="stylesheet" href="' . $path . 'views/assets/css/plugins/adminlte/adminlte.min.css">
  </head>
  <body class="hold-transition sidebar-collapse layout-top-nav">
  <div class="wrapper">';
  include "pages/500/500.php";
  echo '</div>
      </body>
      </html>';
  return;
}

/**----------------------
 *! getting keywords for filling metadata [array form]
 *------------------------**/

$keywords = null;
foreach (json_decode($template->keywords_template, true) as $key => $value) {
  $keywords .= $value . ", ";
}
$keywords = substr($keywords, 0, -2);
/**----------------------
 *! getting and formating data from fonts {Object form}
 *------------------------**/
$fontFamily = json_decode($template->fonts_template, false)->fontFamily;
$fontBody = json_decode($template->fonts_template, false)->fontBody;
$fontSlide = json_decode($template->fonts_template, false)->fontSlide;

/**----------------------
 *!    getting and asigning data from json
 *------------------------**/
$topColor = json_decode($template->colors_template)[0]->top;
$templateColor = json_decode($template->colors_template)[1]->template;
/*echo '<pre>';
print_r(json_decode($template->colors_template)[0]->top->background);
echo '</pre>'*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $template->title_template ?> | Tienda en linea</title>
  <meta name="description" content="<?php echo $template->description_template ?>">
  <meta name="kewywords" content="<?php echo $keywords ?>">
  <link rel="icon" href="<?php echo $path ?>views/assets/img/template/<?php echo $template->id_template ?>/<?php echo $template->icon_template ?>">
  <!-- Google Font: -->
  <?php echo urldecode($fontFamily) ?>
  <!--CSS -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">

  <!-- dynamic style --->
  <style>
    body {
      font-family: "<?php echo $fontBody ?>", sans-serif;
    }

    .slideOpt h1,
    h2,
    h3 {
      font-family: "<?php echo $fontSlide ?>", sans-serif;
    }

    .templateColor,
    .templateColor:hover,
    a.templateColor {
      background: <?php echo $templateColor->background ?> !important;
      color: <?php echo $templateColor->color ?> !important;
    }

    .topColor {
      background: <?php echo $topColor->background ?>;
      color: <?php echo $topColor->color ?>;
      ;
    }
  </style>


  <!-- js Slider-->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">
  <!-- css notie --->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/notie/notie.min.css">
  <!-- css toastr --->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/toastr/toastr.min.css">
  <!-- Material pre-loader --->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/material-preloader/material-preloader.css">
  <!-- own style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/products/products.css">

  <!--javascript-->
  <!-- jQuery -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
  <!-- script for jdSlider -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>
  <!-- plugin knob -->
  <script src="<?php echo $path ?>views/assets/js/plugins/knob/knob.js"></script>
  <!-- sweetAlert --->
  <script src="<?php echo $path ?>views/assets/js/plugins/sweetalert/sweetalert.min.js"></script>
  <!-- Toastr --->
  <script src="<?php echo $path ?>views/assets/js/plugins/toastr/toastr.min.js"></script>
  <!-- Material Preloader --->
  <script src="<?php echo $path ?>views/assets/js/plugins/material-preloader/material-preloader.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- alerts -->
  <script src="<?php echo $path ?>views/assets/js/alerts/alerts.js"></script>
  <!-- notie alert --->
  <!-- https://jaredreich.com/notie --->
  <script src="<?php echo $path ?>views/assets/js/plugins/notie/notie.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
  <input type="hidden" id="urlPath" value="<?php echo $path ?>">
  <div class="wrapper">
    <?php
    include "modules/top.php";
    include "modules/navbar.php";
    if (isset($_SESSION["admin"])) {
      include "modules/sidebar.php";
    }

    if (!empty($routesArray[0])) {
      if (
        $routesArray[0] == "admin" ||
        $routesArray[0] == "logout"
      ) {
        include "pages/" . $routesArray[0] . "/" . $routesArray[0] . ".php";
      } else {
        include "pages/404/404.php";
      }
    } else {
      include "pages/home/home.php";
    }


    include "modules/footer.php";
    ?>
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- AdminLTE App -->
  <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
  <!-- script for showing products either on a list or grid format -->
  <script src="<?php echo $path ?>views/assets/js/products/products.js"></script>
</body>

</html>
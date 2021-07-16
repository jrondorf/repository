<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="dist/repo.css" rel="stylesheet">
    <?php
    require_once('dist/repo.php');
    $defaultconfig = array(
      "root_dir" => realpath('.'),
      // "root_public_url" => 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . "%id=root_dir%",
      
      // 	// api controls
      "ajaxrequest" => 0,
      "chmod" => 0,
      "search" => 1,
      "pagination" => 1,
      
      // 	// gui controls
      // "showlastmodified" => %id=showlastmodified%,
      // "showfilesize" => %id=showfilesize%,
      // "showdimensions" => %id=showdimensions%,
      // "showowner" => %id=showowner%,
      // "showgroup" => %id=showgroup%,
      // "showpermissions" => %id=showpermissions%,
      // "showhtdocs" => %id=showhtdocs%,
      // "showhiddenfiles" => %id=showhiddenfiles%,
      // 	"showpath" => 0,
      // 	"contextmenu" => 1,
      // 	"disable_mime_detection" => 0,
      // 	"showrefresh" => 1,
      // 	"forceproxy" => 0,
      // 	"confirmoverwrite" => 1,
      // "container" => "%id=container%",
      // "scale_image" => %id=image_scale% && extension_loaded('gd'),
      // "image_width" => %id=image_width%,
      // "image_height" => %id=image_height%
  );
    $ifm = new IFM($defaultconfig);
    $ifm->run('inline');
    ?>
    <title>Repo Demo</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="src/includes/jquery.min.js"></script>
    <script src="dist/repo.js"></script>
  </body>
</html>
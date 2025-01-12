<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/repo.css" rel="stylesheet">
    <?php
    require_once('dist/repo.php');
    $defaultconfig = array(
      "root_dir" => realpath('.'),
      "root_public_url" => 'http://repository',
      "language" => 'de',
      
      // 	// api controls
      "ajaxrequest" => 0,
      "chmod" => 0,
      "search" => 1,
      "pagination" => 1,
      "zipnload" => 0,
      "createarchive" => 0,
      "container" => "container",
      "language" => "en",
      "script_path" => realpath(__FILE__),
      "asset_path" => realpath('test'),
      
      // 	// gui controls
      // "showlastmodified" => 1,
      // "whitelist_file_ext_array" => ['jpg'],
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
      "scale_image" => 1 && extension_loaded('gd'),
      "image_width" => 1200,
      "image_height" => 1200,
      "clipboard_folder_deep_link" => 1,
      "display_thumbs" => 1,

      "email_address" => "info@instacks.com",
      "from_email_address" => "",
      "send_email_same_address" => 0,
      "send_email_upload" => 1,
      "email_subject_upload" => "test",
  );
    $ifm = new IFM($defaultconfig);
    $ifm->run('inline');
    ?>
    <title>Repo Demo</title>
  </head>
  <body>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="dist/repo.js"></script>
  </body>
</html>
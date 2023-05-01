<!DOCTYPE html>
<html>
  <head>
      <title>JSON example</title>
  </head>
  <body>
    <?php
      $xml=simplexml_load_file("example.xml") or die("Error: Cannot create object");
      print_r($xml);      
    ?>
  </body>
</html>




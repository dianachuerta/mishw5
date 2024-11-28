<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Javascript Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <div class="p-3 mb-2 bg-info text-dark">
            
           <h1>MIS 4013 Homework 5</h1> 
<?php
$functions = array("function2", "function3", "function4", "function5");

foreach ($functions as $function) {
    echo '<a href="' . $function . '.html">' . ucfirst($function) . '</a> ';
}
?>
   
      </div>
            
  </body>
</html>

<?php

    require 'dbconnection.php';
    header("Access-Control-Allow-Origin: http://localhost:4200");

    function cors() {

      // Allow from any origin
      if (isset($_SERVER['http://localhost:4200'])) {
          // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
          // you want to allow, and if so:
          header("Access-Control-Allow-Origin: http://localhost:4200");
          header('Access-Control-Allow-Credentials: true');
          header('Access-Control-Max-Age: 86400');    // cache for 1 day
      }
  
      // Access-Control headers are received during OPTIONS requests
      if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  
          if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
              // may also be using PUT, PATCH, HEAD etc
              header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
  
          if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
              header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
  
          exit(0);
      }
  
      echo "You have CORS!";
  }
    $sql = "Select * From article";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
      printf("Error: %s\n", mysqli_error($conn));
      exit();
  }

    $data =array();

    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }

    echo json_encode($data);
?>

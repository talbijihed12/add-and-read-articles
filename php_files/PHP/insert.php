<?php

    require 'dbconnection.php';

    header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers');

    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body);

  $title = $data->title;
  $image = $data->image;
  $headerImage = $data->headerImage;
	$introduction = $data->introduction;
  $description = $data->description;
  $language = $data->language;
  $keyWords = $data->keyWords;
  $state = $data->state;
  $numVisit = $data->numVisit;
  $idTheme = $data->idTheme;
  $idUser = $data->idUser;
  $idHost = $data->idHost;


    echo json_encode($request_body);
    if(isset($data)){

    $sql = "INSERT INTO article (title,image,headerImage,introduction,description,lastMod,language,keyWords,state,numVisit,idUser,idHost)
        VALUES ('$title','$image','$headerImage','$introduction','$description','$lastMod','$language','$keyWords','$state','$numVisit','$idUser','$idHost')";
    $result = mysqli_query($conn,$sql);

    }
?>

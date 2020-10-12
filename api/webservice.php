<?php

     header("Content-Type: application/json");
     //echo "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];

     switch ($_SERVER['REQUEST_METHOD']) 
     {
          case 'GET':
                if ($_GET['token']==='0r14n4cus') 
                {
                    $response["dni"]=  $_GET['dni'];
                    $response["token"]=  $_GET['token'];
                    echo json_encode($response);
                }else{
                    $response["data"] = "El token es invalido";
                    echo json_encode($response);
                }
               break;
     }
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   
   $response = array();  
   if (isset($_POST['image'])) {  
      $base64string = $_POST['image'];  
      $base64string = str_replace(' ', '+', $base64string);
      $data = base64_decode($base64string);
      $file = 'images/' .uniqid() . '.bmp';
      file_put_contents($file, $data);
      $result = true;
      if ($result) {  
         $response["message"] = "Image Created Successfully @ " .$file ;  
         $response["success_msg"] = 1;  
         echo json_encode($response);  
      } else {  
         // failed to insert row  
         $response["success_msg "] = 0;  
         $response["message"] = "There was error";  
         // echoing JSON response  
         echo json_encode($response);  
      }  
   }  
  
?>  
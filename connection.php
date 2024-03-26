<?php

   $conn=mysqli_connect('localhost','root','','finalproject');

   if($conn)
   {
      // echo "success";
   }
   else{
      echo "failed".mysqli_error($conn);

   }
   	 ?>
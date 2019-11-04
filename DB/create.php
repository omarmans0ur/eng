<?php

         
         if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $uni=$_POST["uni"];
            $college=$_POST["college"];
            $num=$_POST["num"];



            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "engbreak";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO users(name,email,telephone,university,college,year)VALUES ('$name','$email','$phone','$uni','$college','$num')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
               
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
    



?>
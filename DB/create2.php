<?php

         
         if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $Uemail=$_POST["email"];
            $phone=$_POST["phone"];
            $uni=$_POST["uni"];
            $college=$_POST["college"];
            $num=$_POST["num"];
           $first=$_POST["first"] ;


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
            $query = 'SELECT email FROM users WHERE email  = "'.$Uemail.'" ';
            $res=mysqli_query($conn, $query);
            if($res){
                $row=mysqli_fetch_array($res);
                $email=$row['email']; 
                }
                if($Uemail ==$email) 
                    {
                        $sql = "INSERT INTO users(name,email,telephone,university,college,year,first)VALUES ('$name','$email','$phone','$uni','$college','$num','$first')";
            
                    }
                else {
                    echo "wrong"; 
                }


            $conn->close();
         }
    



?>
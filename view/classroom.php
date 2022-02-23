<?php

     $insert=false;
  if(isset($_POST['Name'])){
    require_once('./db.php');
    $ob= new dbconn();
    $con=$ob->db();
    $Name=$_POST['Name'];
    $Number=$_POST['Number'];
    $Capacity=$_POST['Capacity'];


    

    $sql="INSERT INTO `classroom` ( `Name`, `Number`,`Capacity`) VALUES ('$Name', '$Number','$Capacity');";

    if($con->query($sql) == true){
        $insert=true;
     }
     else{
         echo "ERROR: $sql <br> $con->error";
     }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <link rel="stylesheet" href="./../css/style.css">
</head>
<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add Classroom Form</h2>
                        <form method="POST" class="register-form" id="register-form" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Name" id="Name" placeholder="Building Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="number" name="Number" id="Number" placeholder="Room Number"/>
                            </div>
                            <div class="form-group">
                                <label for="ID-Proof"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="number" name="Capacity" id="Capacity" placeholder="Classroom capacity"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Add"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./../images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
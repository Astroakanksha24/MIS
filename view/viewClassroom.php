<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <link rel="stylesheet" href="./../css/style.css">
    <style>
        table,td,th{
            border-color:rgb(3, 3, 3);
            background:hsl(0, 0%, 100%);
            border:solid 3px;
            border: radius 10px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            text-align: center;
        }
        tr{
          font-size: 30px;
          text-align: center;
          margin-left: auto;
          margin-right: auto;
        }
    </style>
</head>
<body style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <div style="align-content: center; margin-left: 23em;">
            <nav style="display: flex;align-items: center; font-size: 20px;">
                <ul><a href="./../index.html" target="">WCE Sangli </a></ul>
                <ul><a href="./signin.html">Add</a></ul>
                <ul><a href="./admin.html">View</a></ul>
            </nav>
        </div>

        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    
                        <!-- <figure><img src="./../images/signin-image.jpg" alt="sing up image"></figure> -->
          
                     
        <table>
            <?php 
            require_once('./db.php');
            $ob= new dbconn();
            $con=$ob->db();
            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
               }
              
    
            $query = "SELECT * FROM  classroom";
            echo'<tr >
                <th>Name</th>
                <th>Number</th>
                <th>Capacity</th>
              </tr>';
    
              if ($result = $con->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    // $field1name = $row["ID"];
                    $field1name = $row["Name"];
                    $field2name = $row["Number"];
                    $field3name = $row["Capacity"];
                    echo '<tr> 
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                  </tr>';
                }
                $result->free();
            }
            
             ?>
            </table>
                </div>
            </div>
        </section>


</body>
</html>
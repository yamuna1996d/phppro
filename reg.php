<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table class="table">
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>RollNo</td>
        <td><input type="text" name="roll"></td>
    </tr>
    <tr>
        <td>Admission Number</td>
        <td><input type="text" name="address"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input type="text" name="coll"></td>
    </tr>
    
    <tr>
    <td>
    <Button class="btn btn-danger" type="submit" name="but">Submit</Button>
    </td>
    </tr>
    </table>
</form>
</body>
</html>

<?php
if(isset($_POST["but"])){
    $n=$_POST["name"];
    $r=$_POST["roll"];
    $a=$_POST["address"];
    $c=$_POST["coll"];
    $server="localhost";
    $dbusername="root";
    $password="";
    $dbname="studentdb";
    $con=new mysqli($server,$dbusername,$password,$dbname);
    $sql="INSERT INTO `students`(`name`, `rollNo`, `admissionNo`, `college`) VALUES ('$n',$r,'$a','$c')";
    $result= $con->query($sql);
    if($result===TRUE){
     echo "Successfuly inserted";
    }
    else{
     echo "Error".$con->error;
    }

    echo "<table class='table'><tr><td>Name :</td><td>$n</td></tr>
    <tr><td>Roll no :</td><td>$r</td></tr></tr>
    <tr><td>Admission no :</td><td>$a</td></tr>
    <tr><td>College :</td><td>$c</td></tr>
    </table>";
}
?> 

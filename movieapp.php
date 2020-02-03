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
                <td>Movie Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Actor</td>
                <td><input type="text" name="actor"></td>
            </tr>
            <tr>
                <td>Actress</td>
                <td><input type="text" name="actress"></td>
            </tr>
            <tr>
                <td>Director</td>
                <td><input type="text" name="direct"></td>
            </tr>
            <tr>
                <td>Camera Man</td>
                <td><input type="text" name="cam"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-info" name="enter">Enter</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["enter"])){
    $mn=$_POST["name"];
    $ac=$_POST["actor"];
    $acs=$_POST["actress"];
    $dir=$_POST["direct"];
    $cam=$_POST["cam"];

    $server="localhost";
    $dbusername="root";
    $password="";
    $dbname="movie";
    $con=new mysqli($server,$dbusername,$password,$dbname);
    $sql="INSERT INTO `moviedetails`(`moviename`, `actor`, `actress`, `director`, `cameraman`) VALUES ('$mn','$ac','$acs','$dir','$cam')";
    $result= $con->query($sql);
    if($result===TRUE){
     echo "Successfuly inserted";
    }
    else{
     echo "Error".$con->error;
    }
}
?>
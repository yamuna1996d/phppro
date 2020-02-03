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
                <td>Enter Admission Number</td>
                <td><input type="text" name="adn"></td>
            </tr>
            <tr>
                <td>
                    <button name="retrive">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["retrive"])){
    $adm=$_POST["adn"];
    $server="localhost";
    $dbusername="root";
    $password="";
    $dbname="studentdb";
    $con=new mysqli($server,$dbusername,$password,$dbname);
    $sql="SELECT `name`, `rollNo`, `admissionNo`, `college` FROM `students` WHERE `admissionNo` = '$adm'";
    $result= $con->query($sql);
    if($result->num_rows>0){
     while($row=$result->fetch_assoc()){
         $name=$row["name"];
         $roll=$row["rollNo"];
         $admno=$row["admissionNo"];
         $coll=$row["college"];
         echo "<table class='table'><tr><td>Name :</td><td>$name</td></tr>
         <tr><td>Roll no :</td><td>$roll</td></tr></tr>
         <tr><td>Admission no :</td><td>$admno</td></tr>
         <tr><td>College :</td><td>$coll</td></tr>
         </table>";

     }
    }
    else{
        echo "Invalid Result";
    }
}
?>
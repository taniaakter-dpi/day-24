<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
             function fullName($fname,$lname){
                echo $fname ." ". $lname . "<br>";
             }
             fullName("Tania" , "Akter");
      //assosiative array
     $persons = array("Tania"=>600, "Nahida"=> 1000, "Maksuda"=> 5000);
      echo $persons["Nahida"] . "<br>";

     //count
     $cars = array("Toyata","VMW","VOLVO");
     echo count($cars) . "<br>";
     for($x = 0; $x < count($cars); $x++){
    echo $cars[$x] . "<br>";
}
      //superglobal
      var_dump($_SERVER);
      echo "<br>";
      echo $_SERVER["HTTP_HOST"];
 ?>
</body>
</html>
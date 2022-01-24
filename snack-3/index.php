<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
$randomArray = [];
while (count($randomArray) < 15) {
    $newNumber = rand( 1 , 15 );
    if(!in_array($newNumber , $randomArray)){
        $randomArray[] = $newNumber;
    }
     
}
var_dump($randomArray);

?>
<?php  


?>

<h1>Prova</h1>
</body>
</html>
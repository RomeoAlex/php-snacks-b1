<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$basketGames = [
            [
                'casa' => 'Squadra Rossa',
                'ospite' => 'Squadra Bianca',
                'punteggio' => '88-50',
            ],
            [
                'casa' => 'Squadra Bianca',
                'ospite' => 'Squadra Verde',
                'punteggio' => '70-40',
            ],
            [
                'casa' => 'Squadra Verde',
                'ospite' => 'Squadra Rossa',
                'punteggio' => '3-15',
            ],
];

for($i =0; $i < count($basketGames); $i ++ ){
    $this_game = $basketGames[$i];
    echo '<h2>' . $this_game['casa'] . ' - ' . $this_game['ospite'] . ' | ' . $this_game['punteggio'] . '</h2>';
};

?>
<?php  


?>

<h1>Prova</h1>
</body>
</html>
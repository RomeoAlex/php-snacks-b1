<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->



<?php 
$paragraph = 'La Porta Virtutis è un dipinto di Federico Zuccari, databile al 1581 e conservato nella Galleria nazionale delle Marche di Urbino. Fu realizzato come risposta polemica contro il gruppo dei pittori bolognesi attivi a Roma (concittadini di papa Gregorio XIII), che avevano soffiato un\'importante commissione al pittore marchigiano. Lo Zuccari lo espose in occasione della festa dei pittori (San Luca) con grande scandalo, poiché vi sono rappresentati tre gruppi di figure mostruose (rappresentanti vizi quali l\'Adulazione, la Calunnia, l\'Ignoranza) in cui si riconoscono i ritratti di alcuni personaggi dell\'epoca, in atteggiamenti ridicoli o osceni. La vicenda valse al pittore un processo, che terminò con la sua cacciata da Roma.';

$organize = str_replace('. ', '. </br> </br>', $paragraph);

echo '<div class="test">' . $paragraph . '</div>';
echo '<div class="test">' . $organize . '</div>';
// echo ;

?>

<?php  


?>

<h1>Prova</h1>
</body>
</html>
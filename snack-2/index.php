
    <!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$name = $_GET['nome'];
$email = $_GET['mail'];
$age = $_GET['age'];
#stampa verifica
echo '<h1>' . $name . '</h1>' . '<h1>' . $email . '</h1>' . '<h1>' . $age . '</h1>';
if( strlen($name) > 3  && strpos($email, '@') && strpos($email, '.') && is_finite($age)){
    echo '<h1>accesso consentito</h1>';
} else {
    echo '<h1>accesso negato</h1>';
};

?>
<?php  


?>


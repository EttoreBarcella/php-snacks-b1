<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
// validazione nome
function validName($name)
{
    $pattern = '/^[A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+([\ A-Za-z\x{00C0}-\x{00FF}][A-Za-z\x{00C0}-\x{00FF}\'\-]+)*/u';
    $len = strlen($name);

    if ($len > 3 && preg_match($pattern, $name)) {
        return true;
    }

    return false;
}
// validazione mail
function validMail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
// validazione età
function validAge($age)
{
    return $age > 0;
}
// prendo il valore messo
$name = $_GET['name'];
$email = $_GET['mail'];
$age = $_GET['age'];
// se tutti e 3 i parametri sono validi => accesso riuscito, ALTRIMENTI => accesso negato
if (
    validName($name)
    && validMail($email)
    && validAge($age)
) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}
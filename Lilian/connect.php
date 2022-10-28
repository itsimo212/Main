<?php

$text = $_POST["text"];
$name = $_POST["name"];
$email = $_POST["mail"];
$subject = $_POST["subject"];

$conn = new mysqli('localhost', 'root', '','test');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
    $stmt = $conn->prepare("insert into form(name, email, subject, text) values (?, ?, ?, ?)");
    $stmt ->bind_param("ssss",$name, $email, $subject, $text);
    $stmt ->execute();
    echo "Submitted";
    $stmt ->close();
    $conn -> close();
}
if (isset($_POST["text"], $_POST["name"], $_POST["mail"], $_POST["subject"]  )){
    $texte = $_POST["text"]."\n Contactez moi à l'adresse suivante : ".$_POST["mail"];
    $retour = mail("receveurmailtest@gmail.com",  $subject , $texte , "" );
    if ($retour){
        echo "bien joué";
    }
}

?>
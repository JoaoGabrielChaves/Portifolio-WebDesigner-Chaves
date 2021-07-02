<?php

if(isset ($_POST(['email']) &&!empty($_POST(['email'])))){


$nome = addslashes($_POST(['name']))
$email = addslashes($_POST(['email']))
$mensagem = addslashes($_POST(['message']))


$to = "chavesjoaogabriel@hotmail.com"
$subject = "Contato - Chaves"
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:chavesjoaogabriel@hotmail.com"."\r\n"
           ."Reply-To:".$email."\r\n"
           ."X=Mailer:PHP/".phpversion();   
           
if(mail($to,$subject,$body,$header)){
    echo("Seu email foi enviado!")
}else{
    echo("Seu email não pode ser enviado");
}           

}
?>
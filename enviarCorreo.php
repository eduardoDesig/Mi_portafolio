<?php
    if(insset($_POST['send'])){
        //si no esta vacio los campos
        if(!empty($_POST['name']) &&  !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['text']) ){
            $name = $_POST['name'];
            $lastname = $_POST['lname'];
            $email = $_POST['email'];
            $subjet = $_POST['subject'];
            $text = $_POST['text'];
            //
            $header = "From: noreply@ejample.com" . "/r/n";
            $header .= "Reply-To: noreply@ejample.com" . "/r/n";
            $header .= "X-Mailer: PHP/" . phpversion();
            // aquien se le envia el correo
            $mail = mail($name, $lastname, $email, $subjet, $text);
            if($mail){
                echo "<h4>Correo enviado exitosamente</h4>";
            }
        }
    }




?>
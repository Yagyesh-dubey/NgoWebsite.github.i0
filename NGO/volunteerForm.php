<?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
   {
    $name=$_POST['prenom'];
    $mail=$_POST['email'];
    $add=$_POST['adresse'];
    $Tell=$_POST['postal'];
    $contact=$_POST['phone'];
    $skill=$_POST['sujet'];
    $You_do=$_POST['message'];
    $text_area=$_POST['message'];


    $dbc = mysqli_connect('localhost','root','','project_exhibition')
            or die('Not connected to database.');

    $query="INSERT INTO contactus (`Name`, `PhoneNumber`,`Mail`, `Address`, `SkillBring`,'AboutYourself','YouDo') 
            VALUES ('$name', '$contact','$mail', '$add', '$skill','$Tell','$You_do' )";

    $result=mysqli_query($dbc,$query)
            or die('Result failed');

    echo 'Thanks for submitting';
   }
?>
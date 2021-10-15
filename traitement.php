<?php

    if(isset($_POST['nom']))
    {
        $err=0;
        if(empty($_POST['nom']))
        {
            $err=1;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['email']))
        {
            $err=2;
        }else{
            $email= htmlspecialchars($_POST['email']);
        }


        if($err==0)
        {
            setcookie('nom', $nom, time() + 365*24*3600, null, null, false, true);
            setcookie('email', $email, time() + 365*24*3600, null, null, false, true);
            header("LOCATION:index.php");
        }else{
            header("LOCATION:index.php?error=".$err);
        }
       

    }else{
        header("LOCATION:index.php");
    }


?>
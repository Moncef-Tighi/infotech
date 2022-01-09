<?php
session_start();
    function check(){

        $user=$_SESSION['username'];        
        if ($user=="" || isset($_GET["déconnexion"]))  {
            session_destroy();
            header('Location: ../../index.php');
        }
            
    }

?>
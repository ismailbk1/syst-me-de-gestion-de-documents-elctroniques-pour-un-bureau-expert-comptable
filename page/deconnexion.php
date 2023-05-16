<?php
session_start();      
session_unset();     // detruire tous le varaible de session
session_destroy();     //detruire la session complatement

header('location:home.php');

?>
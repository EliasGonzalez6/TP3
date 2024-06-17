<?php

if($_REQUEST['email']=='demo@gmail.com'){
    header('Location: ../../inicio.html');
}
else{
    header('Location: ../../index.php');
}
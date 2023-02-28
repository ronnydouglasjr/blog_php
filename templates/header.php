<?php 

include_once('helpers/url.php');
include_once('data/posts.php');
include_once('data/categories.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
    
    <header>
    <a href="<?php echo $BASE_URL ?>" id="logo">
        <img src="<?php echo $BASE_URL ?>/img/logo.svg" alt="Blog codar">
    </a>
    <nav>
        <ul id="navbar">
            <ul>
               <li><a href="<?php echo $BASE_URL ?>" class="nav-link">Home</a></li>
               <li><a href="#" class="nav-link" >Categorias</a></li>
               <li><a href="#" class="nav-link">Sobre</a></li>
               <li><a href="<?php echo $BASE_URL ?>/contact.php" class="nav-link">Contato</a></li>
            </ul>
        </ul>
    </nav>
    </header>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/my.css">
    <title><?php echo SITENAME;?></title>
  </head>
  <body>
        <div class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="<?php echo URLROOT; ?>">The Game</a>
            </div>
            
            <?php 
              // проверка на логин пароль
            if(isset($_SESSION['user_login'])){ 
               ?>
            <div class="float-right">    
			          <a href="<?php echo URLROOT;?>/account" class="btn btn-outline-light"><?php echo $_SESSION['user_login']; ?></a>
                <a href="<?php echo URLROOT;?>/account/logout" class="btn btn-outline-light">Выход</a>
            </div>
            <?php } else { ?>
              <div class="float-right">
                <a href="<?php echo URLROOT;?>/account/login" class="btn btn-outline-light">Вход</a>
                <a href="<?php echo URLROOT;?>/account/register" class="btn btn-outline-light">Регистрация</a>
              </div>
            <?php } ?>
        </div>


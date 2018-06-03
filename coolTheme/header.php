<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rundle-Investments</title>

  <link rel="stylesheet" href="css/header-footer.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div class="header">
    <div class="wrapper header-content">
        <a href="index.php" class="logo">
            <img src="Logo/Logo/Rundlle_physiotherapy/Rundle_investments.gif">
        </a>
        <div class="main-nav">
            <a class="<?php if($page=='funds') {echo " active ";}?>" href="funds.php">Our Funds</a>
            <a class="<?php if($page=='blog') {echo " active ";}?>" href="blog.php">Blog</a>
            <a class="<?php if($page=='staff') {echo " active ";}?>" href="staff.php">Staff</a>
            <a class="<?php if($page=='contact') {echo " active ";}?>" href="contact.php">Contact Us</a>
        </div>
        <img id="hamburger" src="images/hamburger-icon.png">
    </div>
</div>

<!-- SIDE MENU -->
<div class="menu">
    <a class="<?php if($page=='funds') {echo " active ";}?>" href="funds.php">Our Funds</a>
    <a class="<?php if($page=='blog') {echo " active ";}?>" href="blog.php">Blog</a>
    <a class="<?php if($page=='staff') {echo " active ";}?>" href="staff.php">Staff</a>
    <a class="<?php if($page=='contact') {echo " active ";}?>" href="contact.php">Contact Us</a>
</div>
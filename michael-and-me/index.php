<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template</title>

  <link rel="stylesheet" href="css/header-footer.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!-- HEADER -->
  <?php $page='home'; include 'header.php';?>

  <!-- SHOWCASE -->
  <div class="showcase wrapper">
    <div class="showcase-content">
      <h1>Main Heading</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, accusantium.</p>
      <a href="page1.php">Take Action 1</a>
      <a href="page2.php">Take Action 2</a>
    </div>
  </div>

  <!-- BELOW FOLD 1 -->
  <div class="below-fold-1 wrapper">
    <h2>BELOW FOLD 1</h2>
    <div class="card-container">
      <div class="card">
        <h3>Card Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias voluptatibus maxime praesentium velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, debitis.</p>
      </div>
      <div class="card">
        <h3>Card Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias voluptatibus maxime praesentium velit. </p>
      </div>
      <div class="card">
        <h3>Card Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias voluptatibus maxime praesentium velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, debitis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, esse.</p>
      </div>
      <div class="card">
        <h3>Card Heading</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias.</p>
      </div>
    </div>
  </div>

  <!-- BELOW FOLD 2 -->
  <div class="below-fold-2">
    <div class="wrapper">
      <h2>BELOW FOLD 2</h2>
      <div class="card-container">
        <div class="card">
          <img src="https://static1.squarespace.com/static/561099b6e4b0e1ea752d4131/t/58b703f21b631b3f18acb64b/1521125214352/">
          <h3>Card Heading</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias.</p>
        </div>
        <div class="card">
          <img src="https://static1.squarespace.com/static/561099b6e4b0e1ea752d4131/t/58b703f21b631b3f18acb64b/1521125214352/">
          <h3>Card Heading</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt corrupti molestias voluptatibus maxime praesentium velit. </p>
        </div>
        <div class="card">
          <img src="https://static1.squarespace.com/static/561099b6e4b0e1ea752d4131/t/58b703f21b631b3f18acb64b/1521125214352/">
          <h3>Card Heading</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rerum, porro nobis soluta incidunt.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include "footer.php"?>

  <!-- LOAD JAVASCRIPT -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/header-footer.js"></script>
</body>

</html>

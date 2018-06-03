<div class="header">
    <div class="wrapper header-content">
        <a href="index.php" class="logo">
            <img src="images/logo.png">Company Name
        </a>
        <div class="main-nav">
            <a class="<?php if($page=='page1') {echo " active ";}?>" href="page1.php">Page 1</a>
            <a class="<?php if($page=='page2') {echo " active ";}?>" href="page2.php">Page 2</a>
            <a class="<?php if($page=='page3') {echo " active ";}?>" href="page3.php">Page 3</a>
            <a class="<?php if($page=='page4') {echo " active ";}?>" href="page4.php">Page 4</a>
        </div>
        <img id="hamburger" src="images/hamburger-icon.png">
    </div>
</div>

<!-- SIDE MENU -->
<div class="menu">
    <a class="<?php if($page=='page1') {echo " active ";}?>" href="page1.php">Page 1</a>
    <a class="<?php if($page=='page2') {echo " active ";}?>" href="page2.php">Page 2</a>
    <a class="<?php if($page=='page3') {echo " active ";}?>" href="page3.php">Page 3</a>
    <a class="<?php if($page=='page4') {echo " active ";}?>" href="page4.php">Page 4</a>
</div>
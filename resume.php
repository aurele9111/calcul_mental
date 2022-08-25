<a href="index.php"><h1><?php
echo $_COOKIE['reponse']." / 5"; ?><br><?php
echo $_COOKIE['rep1'];?><br><?php
echo $_COOKIE['rep2'];?><br><?php
echo $_COOKIE['rep3'];?><br><?php
echo $_COOKIE['rep4'];?><br><?php
echo $_COOKIE['rep5'];?><br><?php
?>
 </h1>
<?php 
setcookie( 'nb', "0", time() + 60 * 60 * 24 );
setcookie( 'reponse', "0", time() + 60 * 60 * 24 );
?></a>
<style>
    html{
        text-decoration:none;
    }
    h1{
        font-size:50px;
        position:absolute;
    }
    </style>
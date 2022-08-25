<?php
session_start();

$reponse = $_POST['real'];
echo $reponse;
$reponse_users = $_POST['reponse'];
echo $reponse_users;
$calc=$_POST['re'];

if ($_COOKIE['reponse']>0){
    $bonne_reponse=$_COOKIE['reponse'];
    }
    
else{
    $bonne_reponse=0;
}
if ($_COOKIE['nb']>0){
    $nb=$_COOKIE['nb'];
    }
    else{
        $nb=0;
    }
$nb+=1;
if ($reponse==$reponse_users){
    $bonne_reponse+=1;
    setcookie( 'reponse', "$bonne_reponse", time() + 60 * 60 * 24 );
    $e = $calc . " = " . $reponse;
}
else{
    $e = $calc . " = " . $reponse . " et non " . $reponse_users;
}
setcookie( 'nb', "$nb", time() + 60 * 60 * 24 );
if ($nb==1){
setcookie( 'rep1', "$e", time() + 60 * 60 * 24 );}
elseif ($nb==2){
setcookie( 'rep2', "$e", time() + 60 * 60 * 24 );}
elseif ($nb==3){
setcookie( 'rep3', "$e", time() + 60 * 60 * 24 );}
elseif ($nb==4){
setcookie( 'rep4', "$e", time() + 60 * 60 * 24 );}
elseif ($nb==5){
    setcookie( 'rep5', "$e", time() + 60 * 60 * 24 );}
echo $_COOKIE['reponse'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
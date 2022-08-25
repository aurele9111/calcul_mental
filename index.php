<?php
$nbun=rand(0, 20);
$nbdeux=rand(0, 10);
$value=$nbun*$nbdeux;
if ($_COOKIE['nb']==5){
  header('location: resume.php');
}
?>
<html>
<head>
<link rel="icon" href="Sans_titre.png">
<meta name="viewport" content="initial-scale=1">
<title>Calcul Mental</title>
<meta charset="utf-8">
</head><body>
    <h1>Calcul Mental</h1>
<div>
<form action="reponse.php" method="post">
  <h3><?php echo $nbun; ?> X <?php echo $nbdeux; ?></h3>
        <input type="number" name="reponse" style="color:white;"/>
  <input type="hidden" name="real" value="<?php echo $value; ?>"/>
  <input type="hidden" name="re" value="<?php echo $nbun; ?> X <?php echo $nbdeux; ?>"/>
        <input class="buttonClass" type="submit" value="Valider" name="submit">
    </form>
</div>
<a href="tab1">Table de 1</a>
<a href="tab2">Table de 2</a><br>
<a href="tab3">Table de 3</a>
<a href="tab4">Table de 4</a><br>
<a href="tab5">Table de 5</a>
<a href="tab6">Table de 6</a><br>
<a href="tab7">Table de 7</a>
<a href="tab8">Table de 8</a><br>
<a href="tab9">Table de 9</a>
<a href="tab10">Table de 10</a>
  </body>
  <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDvIF3_2id2SjXkkmsSqHgzeVaEqlnN4vI",
    authDomain: "calcul-mental-db9e2.firebaseapp.com",
    projectId: "calcul-mental-db9e2",
    storageBucket: "calcul-mental-db9e2.appspot.com",
    messagingSenderId: "456629585098",
    appId: "1:456629585098:web:afe6c7bbf094f3c9732033",
    measurementId: "G-MS0MCH8J3B"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
  </html>
<style>
  a{
  color:grey; 
  text-decoration : none;
}
    html{
        background-color:#151414;
        position:absolute;
        left:0%;
        top:10%;
        text-decoration: none;
    }
    h1{
        color:#7F0085;
        }
        h3{
        color:#7F0085;
        }
    .bubble {
  height: 150px;
  width: 300px;
    max-width:50%;
  border: 3px solid #DADADA;
  background: #5E5959;
  position: relative;
  cursor:pointer;
  color:#F3F2F2;
  padding:5px;
}
.triangle {
  width: 0;
  border-top: 20px solid #DADADA;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  cursor:pointer;
  position: relative;
}
    .buttonClass {
  font-size:15px;
  font-family:Arial;
  width:140px;
  height:50px;
  border-width:2px;
  color:#505739;
  border-color:#333029;
  font-weight:bold;
  border-top-left-radius:15px;
  border-top-right-radius:15px;
  border-bottom-left-radius:15px;
  border-bottom-right-radius:15px;
  box-shadow: 0px 1px 0px 0px #1c1b18;
  text-shadow: 0px 1px 0px #ffffff;
  background:linear-gradient(#eae0c2, #ccc2a6);
  position: relative;
}

.buttonClass:hover {
  background: linear-gradient(#ccc2a6, #eae0c2);
  position: relative;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  header{
        width: 100%;
        height: 10rem;
        background-color: rgba(192, 0, 255, 0.4);
        backdrop-filter: blur(5px);
        margin:0;
        display:flex;
        flex-direction:column;
    }
    nav{
    width: 100%;
    height: 100%;
    padding:0;
    }
   ul{
    width: 100%;
    height: 100%;
    margin:0;
    padding:0;
    display: flex;
    justify-content: space-around;
    align-items: center;
     }
     ul>li{
        margin:0;
        padding:0;
        list-style:none;
        font-size:4vw;
     }
     a{
        text-decoration:none;
        color:black;
     }
</style>
<?php
     if(isset($_GET['lang'])){
        $lang=$_GET['lang'];
       }
       else{
        $lang='am';
       }
       if($lang =="am") 
        include "am.php";
      if($lang =="en") 
        include "en.php";
     if($lang =="ge") 
        include "ge.php";
    ?>
<body>

    <header>
        <nav id="nav">
        <ul>
            <li><a href="index.php"><?=home?></a></li>
            <li><a href="about.php"><?=about?></a></li>
            <li><a href="tour.php"><?=tours?></a></li>
            <li><a href="cont.php"><?=conntact?></a></li>
            <li><a href="web.php"><?=webextour?></a></li>
        </ul>
        </nav>
        <nav id="navbar">
        <ul id="flag">
            <li> 
            <a href="?lang=am">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197516.png" alt="am" width="40rem"/>
            </a>
             </li>
            <li>
            <a href="?lang=en">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197374.png" alt="en" width="40rem"/>
            </a>
            </li>
            <li>
            <a href="?lang=ge">
            <img src="https://cdn-icons-png.flaticon.com/512/197/197571.png" alt="ge" width="40rem"/>
            </a>
            </li>
        </ul>    
        </nav>  
    </header>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
          body{
    margin: 0;
    padding: 0;
    background-image: url("https://th.bing.com/th/id/OIP._aT7yHi8w-PDqZ6v_6zccgHaEK?pid=ImgDet&rs=1");
    background-size: cover;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    #home{
        margin-top:4vh;
        width:100%;
        height:35rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
        background-color: rgba(192, 0, 255, 0.4);
        backdrop-filter: blur(5px);
        border-radius:30px;
    } 
    #imgdiv{
        width:36%;
        height:90%;
    }
    #artdiv{
        width:50%;
        height:100%;
        font-size:2vw;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    </style>
    <?php
    include "header.php";
    ?>
  <section id="home">
        <img src="https://cdn-icons-png.flaticon.com/512/31/31069.png" alt="" id='imgdiv'/>
        <div id="artdiv">
        <article>
            <?=lorem?>
        </article>
        </div> 
</section>
    <?php
     include "footer.php";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        flex-direction:column;
        align-items:center;
        background-color: rgba(192, 0, 255, 0.4);
        backdrop-filter: blur(5px);
        border-radius:30px;
    } 
    #check{
        width:30%;
        height:25%;
        background-color: rgba(200, 0, 255, 0.4);
        backdrop-filter: blur(10px);
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        align-items:center;
        border-radius:30px;
    }
    #s1,#s2{
        width:45%;
        height:20px;
    }
    #output{
        width:100%;
        height:70%;
        margin-top:auto;
        display:flex;
        justify-content:space-around;
        border-radius:30px;
    }
    #output>div{
        width:45%;
        height:100%;
        background-color: rgba(200, 0, 255, 0.4);
        backdrop-filter: blur(10px);
        border-radius:30px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .infodiv{
        width:60%;
        height:50%;
        border:1px solid;
        overflow-y: scroll;
        overflow-x: hidden;
    }
</style>
<body>
<?php
    include "header.php";
     if(isset($_GET['lang'])){
       $get=$_GET['lang'];
       }
       else{
        $get='am';
       }
    ?>
<section id="home">
    <div id='check'>
        <div style='width:100%;height:50%;display:flex; justfy-content:center;margin-left:10.5%;'>
        <form action="tour.php?lang=<?=$get?>" method='post' style='width:100%;height:50%;display:flex; justfy-content:center;'>
        <select name="s" id="s1">
            <option></option>
            <option>Yerevan</option>
            <option>Moskva</option>
            <option>Peking</option>
        </select>
        <select name="ss" id="s2">
            <option></option>   
        <option>Berlin</option>
            <option>London</option>
            <option>Washington</option>
        </select>
        </div> 
        <input type="submit"/>
        </form>
    </div> 
    <?php
    $first='';
    $second='';
    if(empty($_REQUEST['s'])){
        $city1='xyxyxyx;';
    }else{
        $city1=$_REQUEST['s'];
    };
    if(empty($_REQUEST['ss'])){
        $city2='xyxyxyx;';
    }else{
        $city2=$_REQUEST['ss'];
    };
    
    switch($city1){
        case 'Yerevan':
            $first=infoyere;
        break;
        case 'Moskva':
            $first=infomoskva;
        break;
        case 'Peking':
            $first=infopekin;
    };
    echo $city1.$city2;
    switch($city2){
        case 'Berlin':
            $second=infober;
        break;
        case 'London':
            $second=infolon;
        break;
        case 'Washington':
            $second=infowash;
    };
    ?>
    <div id='output'>
    <div>
    <img src="https://cdn-icons-png.flaticon.com/512/2414/2414595.png" alt="eee" width='35%'/>
    <div class='infodiv'>
    <?=$first?>
    </div>
    </div>
    <div>
    <img src="https://cdn-icons-png.flaticon.com/512/188/188833.png" alt="eee" width='35%'/>
    <div class='infodiv'>
    <?=$second?>
    </div>
    </div>
</div>       
</section> 
<?php
     include "footer.php";
    ?>
</body>
</html>
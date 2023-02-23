<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    footer{
        width:100%;
        height:30rem;
        background-color: rgba(192, 0, 255, 0.4);
        backdrop-filter: blur(5px);
        border-radius:30px;
    }
    h1{
        text-align:center;
    }
    input{
        outline:none;
        border-radius:30px;
    }
    textarea{
        width:95%;
        margin-left:2.5%;
        resize: none;
    }
</style>
<body>
    <footer>
        <h1>footer</h1>
        <section>
        <?=FName?>:<input type="text" placeholder='First Name'/>
        <br/>
        <br/>
        <?=LName?>:<input type="text" placeholder='Last Name'/>
        <br/>
        <br/>
        <?=text?>:
        <br/>
        <textarea cols="50" rows="10"></textarea>
        </section>
    </footer>
</body>
</html>
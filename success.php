<?php session_start();?>
<!doctype HTML>
<html>
    <head>
        <title>Welcome</title>
        <style>
            body{
                font-family:Verdana;
                
                background-color:#F73859;
            }
            input[type='submit']{
                padding:14px 10px;
                width:30%;
                background:none;
                border-radius: 24px;
                border:2px solid #2ecc71;
                color:white;
            }
            input[type='submit']:hover{
                background:#2ecc71;
                transition:0.3s;
            }
            .cpy{
                position:absolute;
                bottom:0;
                left:50%;
                transform:translate(-50%);
            }
            .container{
                background-color:#252525;
                border-radius: 8px;
                padding:5% 1%;
                padding-top:1%;
            }
        </style>
    </head>
    <body>
        <div class='container'>
        <h1 style="color:white;font-size:10rem;font-weight: 500;">Welcome <?php echo $_SESSION['user'];?>.</h1>
        <form action='logout.php' method='post'>
            <center> <input type='submit' value='Logout'></center>
        </form>
        </div>
        <center class="cpy">&copy;kummari Gurudev - URK17CS127</center>
    </body>
</html>
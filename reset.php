<?php?>
<!doctype HTML>
<html>
    <head>
        <title>Reset Password</title>
        <style>
              body{
                font-family:Verdana;
                text-align: center;
                background-color:#F73859;
            }
            .container{
                
                position:absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                text-align: center;
                height:70%;
                width:33%;
                background-color:#252525;
                border-radius: 8px;
                padding:5% 1%;
                padding-top:0;
            }
            .container *{
                display:block;
                margin:7% auto;
            }
            .container input[type='text'],.container input[type='password']{
                text-align: center;
                border:2px solid #3498db;
                outline:none;
                background:none;
                padding:14px 10px;
                color:white;
                width:60%;
                border-radius:24px;
                
            }
            .c{
                margin-top:10%;
                  
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
        </style>
    </head>
    <body>
        <div class="container">
         <h1 style="color:white;font-size:4rem;font-weight: 500;">RESET PASSWORD</h1>
        <form action="resetpass.php" method="post">
            <input type="text" name="username" placeholder="Username" required autofocus>
            <input type="text" name="phno" placeholder="Phone Number" required pattern="[0-9]{10}">
            <input type="password" name="password" placeholder="New Password" required>
            <input type="submit" value="Reset">
        </form>
        </div>
    <center class="cpy">&copy;kummari Gurudev - URK17CS127</center>
    </body>
</html>
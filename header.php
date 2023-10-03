<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        nav {
            background-color: #ccc;
        }
        p {
            padding: 12px;
        }
        .df {
            display: flex;
        }
        .aic {
            align-items: center;
        }
        .jcsb {
            justify-content: space-between;
        }

    </style>
</head>


<body>

    <nav class="df aic jcsb">
        <div>
            <ul class="df">
                <p><a href="index.php">HOME</a></p>
                <p><a href="#">PRODUCTS</a></p>
                <p><a href="#">SALES</a></p>
                <p><a href="#">MEMBER+</a></p>
            </ul>
        </div>

        <ul class="df">
            <?php
                if(isset($_SESSION["userid"]))
                {
            ?>
                <p><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></p>
                <p><a href="./includes/logout.inc.php">LOGOUT</a></p>
            <?php
                }
                else
                {
            ?>
                <p><a href="#"></a>SIGN UP</p>
                <p><a href="#"></a>LOGIN</p>
            <?php
                }
            ?>
        </ul>
    
    </nav>
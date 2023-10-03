<?php
    include_once "header.php";
?>
<section>
    <div>
    <?php
        if(isset($_SESSION["userid"]))
        {
    ?>
        <div>
            <h2>Cadastrar</h2>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"> <br>
                <input type="password" name="password" placeholder="Password"> <br>
                <input type="password" name="passwordRepeat" placeholder="Repeat password"> <br>
                <input type="email" name="email" placeholder="E-mail"> <br>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
            <?php
                }
                else
                {
            ?>
        <div>
            <h2>Cadastrar</h2>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"> <br>
                <input type="password" name="password" placeholder="Password"> <br>
                <input type="password" name="passwordRepeat" placeholder="Repeat password"> <br>
                <input type="email" name="email" placeholder="E-mail"> <br>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
<br>
<hr>
<br>

        <div>
            <h2>Entrar</h2>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"> <br>
                <input type="password"  name="password" placeholder="Password"> <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
            <?php
                }
            ?>
        <?php 
            if(isset($_GET["newpwd"])) {
                if($_GET["newpwd"] ==  "passwordupdated") {
                    echo "Sua senha foi resetada!";
                }
            }
        ?>
        <p><a href="resetpassword.php">Esqueceu a senha?</a></p>

        
    </div>

    </section>


</body>
</html>
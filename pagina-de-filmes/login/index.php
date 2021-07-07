<?php session_start(); ?>

    <link rel="stylesheet" href="css/style.css">
<?php include "../php/topo/index.php"; ?>

    <div id="box-form">
    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
        <form id="form" action="php/config.php" method="post">
            <label for="email">
                <span>Email:</span>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </label>
            <label for="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </label>

            <input type="submit" id="custon-buttom" name="entrar" title="Entrar" value="Entrar">
             <span id="registro" title="Registrar"><a href="registrar.php">Registrar</a></span>
        </form>
    </div>
    <?php include "../php/footer/index.php"; ?>
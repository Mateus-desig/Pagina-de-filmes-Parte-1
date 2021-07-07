<?php session_start(); ?>
<?php include "../php/topo/index.php"; ?>
    <link rel="stylesheet" href="css/style.css">
    <div id="box-form-registro">
        <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
        <form id="form" action="php/config-registro.php" method="post">
            <label for="email">
                <span>Nome:</span>
                <input type="nome" name="nome" id="nome" placeholder="Nome" required>
            </label>
                <label for="email">
                <span>Email:</span>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </label>
            <label for="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </label>

            <input type="submit" id="custon-buttom" name="cadastrar" title="Cadastre-se" value="Cadastre-se">
             <span id="registro" title="Registrar"><a href="index.php">Login</a></span>
        </form>
    </div>
<?php include "../php/footer/index.php"; ?>
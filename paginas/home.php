<?php
    require("../template/header.php");
?>
<body>
    <header>
        <a href="home.php"><img src="../img/logo.png" class="logo"></a>
        <h2><a href="" class="local-href"><img src="../img/pointer.png" class="pointer"> informe seu CEP</a></h2>
        <input type="text" class="pesq" placeholder="Pesquisar livro...">
        <h2 class="logh2"><a href="login.php" class="log">Login</a></h2>
        <a href=""><img src="../img/carrinho.png" class="carrinho"></a>
        <div class="clear"></div>
        <ul class="linkC">
            <li><a href="cupom.php">CUPOM</a></li>
            <li class="on"><a href="home.php">TEMAS</a></li>
            <li><a href="pague_um_pix.php">PAGUE COM PIX</a></li>
            <li><a href="">SOBRE</a></li>
        </ul>
    </header>
    <div class="coluna-1">
        <h3><a href="romance.php" class="tema">ROMANCE</a></h3>
    </div>
    <div class="coluna-2">
        <h3><a href="terror.php" class="tema">TERROR</a></h3>
    </div>
    <div class="coluna-3">
        <h3><a href="aventura.php" class="tema">AVENTURA</a></h3>
    </div>
    <div class="clear"></div>
</body>
<?php
    require("../template/footer.php");
?>
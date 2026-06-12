    <header>
        <nav>
        <link rel="stylesheet" href="assets/css/biblioteca.css">
        <div class="container">
            <div class="esquerda">
            <img src="assets/imagens/favicon.png" class="logo">
            <span>Bibliolandy</span>
            <a href="biblioteca.php">Home</a>
            
            </div>
            <div class="direita">
                <a href="biblioteca.php?popup=abrir">
                <img src="/bibliotecadigital/assets/imagens/add.png" class="add">
                </a>

            <div class="usuario">
                <?= htmlspecialchars($_SESSION['usuario']) ?>     <!-- Exibe o nome de usuário da sessão atual -->
            </div>

            <form action="controllers/logout.php" method="POST">
                <button type="submit" class="">
                    Sair
                </button>
            </form>

            </div>

        </div>
        </nav>
    </header>
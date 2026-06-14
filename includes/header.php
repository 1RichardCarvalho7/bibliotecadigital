    
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bibliolandy</title>
    <link rel="stylesheet" href="assets/css/biblioteca.css">
    
</head>
    
<body>
    <header>
        <nav>
        
        <div class="container">
            <div class="esquerda">
            <img src="assets/imagens/favicon.png" class="logo">
            <span>Bibliolandy</span>
            
            </div>
            <div class="direita">
                <a href="biblioteca.php?popup=abrir">
                <img src="/bibliotecadigital/assets/imagens/add.png" class="add">
                </a>

            <div class="user">
                <?= htmlspecialchars($_SESSION['usuario']) ?>     <!-- Exibe o nome de usuário da sessão atual -->
            </div>
            <form action="controllers/logout.php" method="POST">
                <button type="submit" class="sair">
                    Sair
                </button>
            </form>
            </div>

        </div>
        </nav>
    </header>
</body>
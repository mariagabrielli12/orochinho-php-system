<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- Seu CSS DEPOIS -->
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pisca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="canais.html">Canais</a>
                <a class="nav-link" href="#">Sobre</a>
            </div>
        </div>
    </nav>

    <div class="fundo">
        <img src="img/pisca2.jpg" alt="">

    </div>

   <div class="banner">



    <div class="menu-cards">

        <a href="quiz-orochinho/quiz.php" class="card">
            <h3>Quiz do Orochinho</h3>
            <p>Teste seus conhecimentos</p>
        </a>

        <a href="videos.php" class="card">
            <h3>Vídeos</h3>
            <p>Melhores momentos</p>
        </a>

        <a href="memes.php" class="card">
            <h3>Memes</h3>
            <p>Os mais famosos</p>
        </a>

    </div>

</div>


    <!-- Scripts Bootstrap 4.6 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
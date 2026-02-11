
<?php
session_start();
include("../config/conexao.php");

if (!isset($_SESSION['pergunta'])) {
    $_SESSION['pergunta'] = 0;
    $_SESSION['pontos'] = 0;
}

if (isset($_POST['resposta'])) {

    $resposta = $_POST['resposta'];

    $sql = "SELECT correta FROM perguntas LIMIT 1 OFFSET ".$_SESSION['pergunta'];
    $result = $conn->query($sql);
    $pergunta = $result->fetch_assoc();

    if ($resposta == $pergunta['correta']) {
        $_SESSION['pontos']++;
    }

    $_SESSION['pergunta']++;
}

    $sql = "SELECT * FROM perguntas LIMIT 1 OFFSET ".$_SESSION['pergunta'];
    $result = $conn->query($sql);
    $pergunta = $result->fetch_assoc();

    if (!$pergunta) {
    header("Location: resultado.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

     <link rel="stylesheet" href="../css/menu.css">
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

 

    </div>

    <img src="../img/pisca1.jpg" class="decor decor1">
    <img src="../img/canal01.jpg" class="decor decor2">
    <img src="../img/pisca3.jpg" class="decor decor3">
    <img src="../img/pisca4.jpg" class="decor decor4">


    <div class="quiz-container">

    <div class="quiz-header">
        <h1>Quiz do Orochinho</h1>
        <p>Pergunta <?php echo $_SESSION['pergunta']+1; ?></p>
    </div>

    <div class="progress-bar">
        <div class="progress"></div>
    </div>

    <div class="quiz-box">

        <h2 class="pergunta"><?php echo $pergunta['pergunta']; ?></h2>

        <form method="POST" id="quizForm">

            <button class="option" name="resposta" value="1">
                <?php echo $pergunta['alternativa1']; ?>
            </button>

            <button class="option" name="resposta" value="2">
                <?php echo $pergunta['alternativa2']; ?>
            </button>

            <button class="option" name="resposta" value="3">
                <?php echo $pergunta['alternativa3']; ?>
            </button>

             <button class="option" name="resposta" value="3">
                <?php echo $pergunta['alternativa4']; ?>
            </button>

        </form>

    </div>

</div>

</body>
</html>
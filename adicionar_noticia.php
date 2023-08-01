<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Notícia</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="header">
        <h1>Adicionar Notícia</h1>
    </div>
    <div class="container">
        <form action="processar_noticia.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            <br>
            <label for="conteudo">Conteúdo:</label>
            <textarea id="conteudo" name="conteudo" rows="4" required></textarea>
            <br>
            <input type="submit" value="Adicionar Notícia">
        </form>
    </div>
</body>
</html>

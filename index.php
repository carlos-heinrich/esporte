<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OlímpicoExpress</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="header">
        <h1>OlímpicoExpress</h1>
    </div>
    <div class="container">
        <?php
        // Incluir o arquivo de conexão com o banco de dados
        require_once 'db.php';

        // Consultar as últimas notícias do banco de dados
        $stmt = $pdo->query('SELECT * FROM noticia ORDER BY data_publicacao DESC');
        $resultado = $stmt->fetchAll(PDO:: FETCH_ASSOC);

        // Exibir as notícias
        foreach ($resultado as $noticia) {
            echo '<div class="noticia">';
            echo '<h2>' . $noticia['titulo'] . '</h2>';
            echo '<p>' . $noticia['conteudo'] . '</p>';
            echo '</div>';
        }

        ?>
    </div>
    <div class="footer">
        <a href="adicionar_noticia.php">Adicionar Notícia</a>
    </div>
</body>
</html>

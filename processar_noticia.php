<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];

    // Incluir o arquivo de conexão com o banco de dados
    require_once 'db.php';

    // Preparar e executar a inserção no banco de dados
    $sql = "INSERT INTO noticia (titulo, conteudo, data_publicacao) VALUES ('$titulo', '$conteudo', NOW())";
    $pdo->query($sql);

   

    // Redirecionar de volta para a página de notícias após a inserção
    header("Location: index.php");
    exit();
}
?>

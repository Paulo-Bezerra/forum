<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSociedade - Bem Vindo</title>
</head>
<body>
<?php # inserção do cabeçalho
    include_once $_SERVER['DOCUMENT_ROOT']."/forum/src/views/components/header.php";
?>

    <div ida="title-page">
        <h2>Novo Tópico</h2>
    </div>

    <br>

    <main>
        <form action="">
            <div class="input-block">
                <label for="author">Autor:</label>
                <input type="text" name="author" id="author">
            </div>

            <br>

            <div class="input-block">
                <label for="subject">Assunto: </label>
                <input type="text" name="subject" required>
            </div>

            <br>
            <br>

            <div class="textarea-block">
                <label for="body">Corpo:</label>
                <br>
                <textarea name="body" id="" cols="30" rows="10"></textarea>
            </div>

            <br>

            <div class="input-block">
                <input type="reset" value="Cancelar">
                <input type="submit" name="publish" value="Publicar">
            </div>
        </form>
    </main>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php # inserção do cabeçalho
    include_once $_SERVER['DOCUMENT_ROOT']."/forum/src/views/components/footer.php";
?>
</body>
</html>

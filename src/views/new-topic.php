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

    <div class="new-topic">
        <h2>Novo Tópico</h2>
    </div>

    <br>

    <div class="main">
        <form action="">
            <label for="subject">Assunto: </label>
            <input type="text" name="subject" required>
            <br><br>

            <label for="body">Corpo:</label>
            <br>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="reset" value="Cancelar">
            <input type="submit" name="publish" value="Publicar">
        </form>
    </div>
    
    <!--O codigo ainda será revisado, a parte a seguir é apenas uma "gambiarra" nao ficará presente na fase final-->
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

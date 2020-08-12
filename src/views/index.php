<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSociedade - Bem Vindo</title>
</head>
<body>

<?php # inserção do cabeçalho
    include_once $_SERVER['DOCUMENT_ROOT']."/forum/views/components/header.php";
?>    

    <br>
    <div>
        <div id="search-container">
            <form action="#">
                <label for="search">Pesquisar:</label>
                <input id="search" type="text">
                <input type="submit" id="search" value="Buscar">
        

            <div id="search-tools">
                    <p>Ferramentas de pesquisa:</p>
                    <input type="radio" name="#" id="subjects" value="subjects">
                    <label for="subjects">Só assuntos</label>

                    <input type="radio" name="#" id="topics" value="topics">
                    <label for="topics">Só tópicos</label>
                </form>
            </div>
        </div>
    </div>

    <br>

    <div id="main">
        <div id="header-container">
            <h1>Assuntos relevantes</h1>
            <a href="">1# Assunto</a>
            <a href="">2# Assunto</a>
            <a href="">3# Assunto</a>
            <a href="">4# Assunto</a>
            <a href="">5# Assunto</a>
        </div>
        <br>
        <br>

        <div id="topics">
            <table>
                <tr> 
                    <th>Assunto</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>Isso é o assunto</td>
                    <td><span>|</span> Ativo</td>
                    <td><span>|</span> <a href="#">Entrar</a></td>
                </tr>
                <tr>
                    <td>Isso é o assunto</td>
                    <td><span>|</span> Encerrado</td>
                    <td><span>|</span> <a href="#">Entrar</a></td>
                </tr>
                <tr>
                    <td>Isso é o assunto</td>
                    <td><span>|</span> Ativo</td>
                    <td><span>|</span> <a href="#">Entrar</a></td>
                </tr>
            </table>
        </div>
    </div>
    <!--O codigo ainda será revisado, a parte a seguir é apenas uma "gambiarra" nao ficará presente na fase final-->
    <br>
    <br>
    <br>
    <br>

<?php # inserção do cabeçalho
    include_once $_SERVER['DOCUMENT_ROOT']."/forum/pages/components/footer.php";
?>
</body>
</html>
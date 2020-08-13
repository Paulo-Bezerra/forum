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

    <br>
    <div>
        <div id="search-container">
            <form action="#" id="search-form">
                <div class="input-block">
                    <label for="search">Pesquisar:</label>
                    <input id="search" type="text">
                    <input type="submit" id="search" value="Buscar">
                </div>

                <div class="input-block">
                    <p>Ferramentas de pesquisa:</p>
                    <input type="radio" name="subjects" id="subjects" value="subjects">
                    <label for="subjects">Só assuntos</label>
                </div>
                
                <div class="input-block">
                    <input type="radio" name="topics" id="topics" value="topics">
                    <label for="topics">Só tópicos</label>
                </div>
            </form>
        </div>
    </div>

    <br>

    <main>
        <header>
            <h1>Assuntos relevantes</h1>
            <a href="">1# Assunto</a>
            <a href="">2# Assunto</a>
            <a href="">3# Assunto</a>
            <a href="">4# Assunto</a>
            <a href="">5# Assunto</a>
        </header>

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
    </main>
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
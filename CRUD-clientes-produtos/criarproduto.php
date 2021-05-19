<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Produto</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        section{
                position: relative;
                top: 200px;
                border: 1px solid green;
                text-align: center;
                padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Criar Produto </h1>
    </header>
        
    <nav>
        <a href="index.html"><button class="botao">Página inicial</button></a>
        <a href="listarum.php"><button class="botao">Listar um cliente</button></a>
        <a href="excluir.php"><button class="botao">Excluir cliente</button></a>
        <a href="editar.php"><button class="botao">Editar cliente</button></a>
        <a href="listartodos.php"><button class="botao">Listar todos os clientes</button></a>
    </nav>
    <footer>
        <h3>Rafael Vargas - Matricula: 1820478300010</h3>   
    </footer>
    <section>
        <?php
            include_once("conexaopdt.php");

            $filename = 'C:/Users/Pichau/Desktop/FAETERJ/TERCEIRO PERIODO/3DAW/Produtos.csv';

            if(file_exists($filename)){
                if(mysqli_query($conn, "LOAD DATA INFILE '$filename' INTO TABLE produto
                FIELDS TERMINATED BY ';'
                LINES TERMINATED BY '\n'
                IGNORE 1 ROWS")){
                    echo "<h2>Arquivo carregado com sucesso!</h2>";
                    echo"<a href="."index.html"."><button class="."botao".">Página inicial</button></a>";    
                }
                else{
                    echo"<h2>O arquivo não foi carregado!</h2>";
                    echo"<a href="."index.html"."><button class="."botao".">Página inicial</button></a>";
                }
            }
            else{
                echo"<h2>esse arquivo não existe!</h2>";
                echo"<a href="."index.html"."><button class="."botao".">Página inicial</button></a>";
            }

            $con = $conn->query($consulta) or die ($conn->error);
        ?>
    </section>
</body>
</html>
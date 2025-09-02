<?php
include "conexao.php";
//Dados pessois

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$data_nascimento = $_POST["data_nascimento"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];

//informções medicas

$sintomas = $_POST["sintomas"];
$inicio_sintomas = $_POST["inicio_sintomas"];
$doencas_existentes = $_POST["doencas_existentes"];
$uso_medicamentos = $_POST["uso_medicamentos"];
$alergias = $_POST["alergias"];


//Dados vitais

$pressao_arterial = $_POST["pressao_arterial"];
$temperatura = $_POST["temperatura"];
$frequencia_cardiaca = $_POST["frequencia_cardiaca"] ?? null;
$saturacao_o2 = $_POST["saturacao_o2"] ?? null;
//Observações

$observacoes = $_POST["observacoes"];

$sql = "INSERT INTO pacientes (nome,idade,sexo,data_nascimento,telefone,cpf,endereco,sintomas,inicio_sintomas,doencas_pre_existentes,uso_medicamentos,alergias,pressao_arterial,temperatura,frequencia_cardiaca,saturacao_o2,observacao)
VALUES('$nome','$idade','$sexo','$data_nascimento','$telefone','$cpf','$endereco','$sintomas','$inicio_sintomas','$doencas_existentes','$uso_medicamentos','$alergias','$pressao_arterial','$temperatura','$frequencia_cardiaca','$saturacao_o2','$observacoes' )";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pasciente Cadastrador</title>
    </head>
    <body>
        <div class = "container">
            <?php
            if ($conn->query($sql) === TRUE) {
            echo "<h2> Paciente Cadastrado com sucesso</h2>";
            echo "<div class= 'paciente'></div>";
            echo "<b> Nome: </b> $nome <br>";
            echo "<b> idade: </b> $idade <br>";
            echo "<b> sexo: </b> $sexo <br>";
            echo "<b> data_nascimento: </b> $data_nascimento <br>";
            echo "<b> telefone: </b> $telefone <br>";
            echo "<b> cpf: </b> $cpf <br>";
            echo "<b> endereco: </b> $endereco <br>";
            echo "<b> sintomas: </b> $sintomas <br>";
            echo "<b> inicio_sintomas: </b> $inicio_sintomas <br>";
            echo "<b> doencas_existentes: </b> $doencas_existentes <br>";
            echo "<b> uso_medicamentos: </b> $uso_medicamentos<br>";
            echo "<b> alergias: </b> $alergias <br>";
            echo "<b> pressao_arterial: </b> $pressao_arterial <br>";
            echo "<b> temperatura: </b> $temperatura <br>";
            echo "<b> frequencia_cardiaca: </b> $frequencia_cardiaca <br>";
            echo "<b> saturacao_o2: </b> $saturacao_o2 <br>";
            echo "<b> observacoes: </b> $observacoes <br>";
                }else{
                    echo "<p> Erro ao cadastrar Paciente" . $conn->error . " </p>";
        }
             $conn->close();  
?>
        </div>
    </body>
    </html>
</html>
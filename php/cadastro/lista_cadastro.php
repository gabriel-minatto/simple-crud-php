<?php


    require_once '../conexao.class.php';
    require_once '../crud.class.php';

    $con = new conexao(); 
    $con->connect(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //apenas testando a conexao
            if($con->connect() == true){
                echo 'Conectou';
            }else{
                echo 'Não conectou';
            }
        ?>
        <a href="formulario_cadastro.php">
            Novo
        </a>
        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                       Nascimento
                    </th>
                    <th>
                       Senha 
                    </th>
                    <th>
                       ID
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = mysql_query("SELECT * FROM form003_cadastro"); // query que busca todos os dados da tabela form001_compra
                    while($campo = mysql_fetch_array($consulta)){ // laço de repetiçao que vai trazer todos os resultados da consulta
                ?>
                    <tr>
                        <td>
                            <?php echo $campo['nome']; ?>
                        </td>
                        <td>
                            <?php echo $campo['email']; ?>
                        </td>
                        <td>
                            <?php echo $campo['nascimento']; ?>
                        </td>
                        <td>
                            <?php echo $campo['senha']; ?>
                        </td>
                        <td>
                            <?php echo $campo['id']; ?>
                        </td>
                        
                        <td>
                            <a href="formulario_cadastro.php?id=<?php echo $campo['id']; //pega o campo ID para a ediçao ?>">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="deleta_cadastro.php?id=<?php echo $campo['id'];  //pega o campo ID para a exclusao ?>">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <center><a href="https://trabalho-final-cpw-gabdevilshunter.c9users.io/index.php">Voltar</a></center>
    </body>
</html>

<?php $con->disconnect();?> 



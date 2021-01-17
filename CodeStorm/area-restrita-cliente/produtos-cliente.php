<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Minha Loja.com</title>

        <?php require_once 'global.php' ?>
        <?php
            try {
                $produto = new Produto();
                $listaProdutos = $produto->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

    </head>
    <body>
        <?php
            include_once("valida-sentinela-cliente.php");
        ?>

        <table>
            <tr>
                <td width='1000'>
                    <h1><center>Minha Loja.com</center></h1>
                </td>
                <td>
                    <h2>Olá, Cliente</h2>
                    <a href="../logout.php">Sair</a>
                </td>
            </tr>
        </table>
        
        
        <table>
            <tr height='30'>
                <th width='350'><h3><a href='index.php'>Home</a></h3></td>
                <th width='350'><h3><a href='produtos-cliente.php'>Produtos</a></h3></td>
                <th width='350'><h3>Carrinho</h3></td>
                <th width='350'><h3>Contato</h3></td>
            </tr>
        </table>

        <h1>Conheça nossos produtos</h1>

        <table>
            <tbody>
                <!-- <tr> -->
                <?php
                    foreach($listaProdutos as $linha){
                        echo "<tr>";
                            echo "<td>";
                                $idproduto = $linha['idproduto'];
                                echo "<img src='../".$linha['fotoproduto']."' width='100' height='100'>"
                                    ."<br>".$linha['descproduto']
                                    ."<br> R$ ".$linha['valorproduto']
                                    ."<br><a href='#'>Comprar</a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
                <!-- </tr> -->
            </tbody>
        </table>

    </body>
</html>  
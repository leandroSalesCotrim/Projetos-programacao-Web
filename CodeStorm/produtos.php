<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Minha Loja.com</title>

        <?php require_once 'global.php' ?>
        <?php
            try {
                $produto = new Produto();
                $lista = $produto->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>

    </head>
    <body>
        <table>
            <tr>
                <td width='1000'>
                    <h1><center>Minha Loja.com</center></h1>
                </td>
                <td>
                    <form name='login' action='valida-login.php' method='post'>
                        <label>Login:</label>
                        <input type='text' name='txtlogin'>
                        <br>
                        <label>Senha:</label>
                        <input type='password' name='txtsenha'>
                        <br>
                        <input type='radio' name='perfil' value='1'>Administrador
                        <input type='radio' name='perfil' value='2' checked>Cliente
                        <br>
                        <input type='submit' value='Acessar'>
                    </form>
                </td>
            </tr>
        </table>
        
        
        <table>
            <tr height='30'>
                <th width='350'><h3><a href='index.php'>Home</a></h3></td>
                <th width='350'><h3><a href='produtos.php'>Produtos</a></h3></td>
                <th width='350'><h3><a href='form-cadastro-cliente.php'>Cadastre-se</a></h3></td>
                <th width='350'><h3>Contato</h3></td>
            </tr>
        </table>
        <h1>Conheça nossos produtos</h1>

        <table>
            <tbody>
                <!-- <tr> -->
                <?php
                    foreach($lista as $linha){
                        echo "<tr>";
                            echo "<td>";
                                $idproduto = $linha['idproduto'];
                                echo "<img src='".$linha['fotoproduto']."' width='100' height='100'>"
                                    ."<br>".$linha['descproduto']
                                    ."<br>".$linha['valorproduto'];
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
                <!-- </tr> -->
            </tbody>
        </table>

    </body>
</html>  
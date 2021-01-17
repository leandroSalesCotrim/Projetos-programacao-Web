<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Minha Loja.com</title>
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
        <h1>Torne-se um cliente e se cadastre em nosso site...</h1>
        <form name='cadastro-cliente' action='cadastrar-cliente.php' method='post'>
            <label>Nome:</label> <input type='text' name='txtnome'>
            <br>
            <label>CPF:</label> <input type='text' name='txtcpf'>
            <br>
            <label>RG:</label> <input type='text' name='txtrg'>
            <br>
            <label>Email:</label> <input type='email' name='txtemail'>
            <br>
            <input type='submit' value='Cadastre-se'>
        </form>
</html>  
<?php
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    echo($login);
    echo($senha);

            if (($login == 'adm') && ($senha == '123')){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;
                header("Location: area-restrita-adm/index-area-restrita-adm.php");
            }
            else{
                header("Location: index.php");
            }
            require_once 'global.php';
            
            $cliente = new Cliente();
            $lista = $cliente->listar();

            $achou = false;

            foreach ($lista as $linha){ 
                if (($login == $linha['emailcliente']) && ($senha == $linha['rgcliente'])){
                    $achou = true;
                }
            }

            if($achou){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;
                header("Location: area-restrita-cliente/index-area-restrita-cliente.php");
            }

?>
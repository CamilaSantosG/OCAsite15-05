<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pádina de Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    
     <form action="insert_usuario.php" method="post">
         <div>
             <H1>
             Cadastro
             </H1>
             <label class="lnm" for="Nome">Nome</label>
             <input class="cxnm" type="text" name="nome" id="nome">
             <label class="Llogin" for="login">Login</label>
             <input class="cxlogin" type="text" name="login" id="login">
             <label class="lsenha" for="Senha">Senha</label>
             <input class="cxsenha" type="password" name="senha" id="senha">
             <label class="lgmail" for="Gmail">Gmail</label>
             <input class="cxgmaii" type="text" name="gmail" id="gmail">
             <input class="cadastro" type="submit" value="Cadastrar-se">
         </div>
     </form>

</body>
</html>
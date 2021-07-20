<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="_css/style.css" type="text/css">    
    <meta charset="UTF-8">
        <title>Cadastro</title>
</head>
 <body>
   
   
     <form method="post" action="processaalter.php">
        <fieldset class="grupo">
        <div class="campo">
                <label for="nome">Nome </labeç>
                <input type="text" name="nome" id="nome"></input>
            </div class="campo">
           
<!-- novos campos -->
            <div class="campo">
                <label for="campo">Nome novo: </labeç>
                <input type="text" name="nome_" id="nome"></input>
            </div class="campo">
            
            <div class="campo">
                <label for="nome">Sobrenome novo </labeç>
                <input type="text" name="sobrenome_" id="sobrenome"></input>
            </div class="campo">
            
            <div class="campo">
                <label for="vpf">CPF novo </labeç>
                <input type="text" name="cpf_" id="cpf"></input>
            </div class="campo">
            
            <div class="campo">
                <label for="nome">Data denascimento nova </labeç>
                <input type="text" name="nasc_" id="nome"></input>
            </div class="campo">
            
        
        </fieldset>
    <button class="botao_novo" type="submit">Alterar</button>



    </form>
 </body>

</html>


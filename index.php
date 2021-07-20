<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="_css/style.css" type="text/css">    
    <meta charset="UTF-8">
        <title>Cadastro</title>
</head>
 <body>
   
   
     <form method="post" action="pros.php">
        <fieldset class="grupo">
        <div class="campo">
                <label for="nome">Nome </labeç>
                <input type="text" name="nome" id="nome"></input>
            </div class="campo">
            <div class="campo">
                <label for="sobrenome">Sobrenome </labeç>
                <input type="text" name="sobrenome" id="sobrenome"></input>
            </div class="campo">
            <div class="campo">
                <label for="cpf">CPF</labeç>
                <input type="text" name="cpf" id="cpf"></input>
            </div class="campo">
            <div class="campo">
                <label for="nasc">Data de nascimento</labeç><br>
                <input type="date" name="nasc" id="nasc"></input>
            </div class="campo">
            <div class="campo">
            <label for="esc"></label>
            <select name="esc">
                    <option selected disabled value="">Selecione</option>
                    <option value="1">cadastrar</option>
                    <option value="2" >modificar</option>
                    <option value="3">pesquisar</option>
                    <option value="4">excluir</option>
                    <option disabled invisible value="5">selecionar tudo</option>
            </label>
                </select>
            </div class="campo">
        </fieldset>
    <button class="botao" type="submit">Enviar</button>



    </form>
 </body>

</html>


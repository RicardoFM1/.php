<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
    <link rel="stylesheet" type="text/css" href="php.css">
</head>
<body>
    <?php
     $nome = "Ricardo";
     $idade = 16;
     $cidade = "Santa Cruz do Sul";
     $pais = "Brasil";
     define ("curso","Técnico em TI");
     define ("duracao",1200);
     echo "<h1>Teste \"aspas\"</h1>";
     echo "O meu curso é: " . curso;
     echo "<br>";
     echo "A duraçao do curso é de: " . duracao . "horas"; 
    $numero = 0;
     function adicionar_numero () 
     {
        global $numero;
        $numero += 5; 
        echo "<br>";
        echo "Valor do número: " . $numero; 

     }
     echo "valor do número inicial: " . $numero;
     adicionar_numero()
     
    ?>
    <h1 class="meuNome">Meu nome é: "<?php echo  $nome; ?>"</h1>
    <h2>Minha idade é: <?php echo $idade; ?></h2>
    <h3>Moro na cidade: <?php echo $cidade; ?> 
    <br>E no país: <?php echo $pais; ?></h3>
    <button >Click me!</button>
    <form class="formulario" action="form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Seu nome...">
        <br>
          <label for="senha">Senha:</label>
        <input type="password" placeholder="Sua linda senha..." name="senha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
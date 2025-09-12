<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>
<body>
    <?php
     $nome = "Ricardo";
     $idade = 16;
     $cidade = "Santa Cruz do Sul";
     $pais = "Brasil";
     echo "<h1>Teste \"aspas\"</h1>"
    ?>
    <h1>Meu nome é: "<?php echo  $nome; ?>"</h1>
    <h2>Minha idade é: <?php echo $idade; ?></h2>
    <h3>Moro na cidade: <?php echo $cidade; ?> 
    <br>E no país: <?php echo $pais; ?></h3>

</body>
</html>
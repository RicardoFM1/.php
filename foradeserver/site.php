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
    
    // $matriz = [
    //     ["linha1, coluna1", "linha1 coluna1", "linha1 coluna1"], 
    //     ["linha2, coluna2", "linha2 coluna2", "linha2 coluna2"]
    // ];
    // $matrizAssociativo = [
    //     "Arma" => "Ak-47",
    //     [
    //     "Nome" => "Ricardo",
    //     "Idade" => 19
    //     ],
    //     [
    //     "Nome" => "William",
    //     "Idade" => 25
    //     ]
    //     ];
    //     print_r($matrizAssociativo["Arma"]);
    //     print_r($matrizAssociativo[0]);
    //     print_r($matrizAssociativo[1]);
       
    ?>

    <div class="divFormulario">

        <form class="formulario" action="form.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Seu nome...">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" placeholder="Sua linda senha..." name="senha">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
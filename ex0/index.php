<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendendo PHP</title>
</head>

<body>
  <h1>
    <?php 
        echo "Olá, Mundo!🗺️";
    ?>
  </h1>
  <p>
    <?php 
      $nome = "Gustavo Mendes";
      echo "Meu nome é $nome!";
    ?>
  </p>
  <p>
    <?php 
      $cor = "azul"; // Variável
      echo "Minha cor preferida é " . $cor . "!";
      echo "<br>";
      echo "<br>";
      var_dump($cor); // Mostra o tipo da variável (string)
    ?>
  </p>
  <p>
    <?php 
      $idade = 2024 - 2004;
      echo "Em 2024, completo " . $idade . " anos!";
      phpinfo();
    ?>
  </p>
</body>

</html>
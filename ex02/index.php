<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php 
    date_default_timezone_set("America/Porto_Velho");
    echo"Hoje é dia " . date("d/M/Y");
    echo "<br>";
    echo "<br>";
    echo "E a hora atual é " . date("G:i:s T"); 
    echo "<br>";
    function myTest () {
      static $x = 0;
      echo $x;
      echo "<br>";
      $x++;
    }
    myTest(); 
    myTest();
    myTest();
    echo "<br>";
    $primeiroNome = "Gustavo";
    $sobrenome = "Mendes";
    echo "Meu nome é " . $primeiroNome . " e meu sobrenome é " . $sobrenome . "!";
  ?>
</body>

</html>
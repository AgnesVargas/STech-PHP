<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Aula 08</title>

</head>

<body>
    <?php
    echo "O seu nome é: " . $_POST["nome"];
    echo "</br>";
    echo "O seu peso é: " . $_POST["peso"];
    echo "</br>";
    echo "O seu altura é: " . $_POST["altura"];
    echo "</br>";
    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    
    function imc($altura, $peso)
    {
        $altura = str_replace(',', '.', $altura);
        $result = $peso / ($altura * $altura);
        return $result;
    }
    echo "<hr/>";
    echo "Seu IMC é: " . imc($altura, $peso);
    echo "</br>";
    
    if (!empty ($_POST['nome'])
      && !empty ($_POST['peso'])
      && !empty ($_POST['altura'])){
    }
    if (imc($altura, $peso)< 18.5){
        echo "Abaixo do Peso";
    }elseif (imc($altura, $peso) <= 24.9){
        echo "Peso Normal";
    }elseif (imc($altura, $peso) <= 29.9){
        echo "Sobrepeso";
    }elseif (imc($altura, $peso) <= 34.9){
        echo "Obesidade Grau I";
    }elseif (imc($altura, $peso) <= 39.9){
        echo "Obesidade Grau II";
    }elseif (imc($altura, $peso) >= 40) {
        echo "Obesidade Grau III ou Mórbida";
    }
    else{
        echo "favor preencher o form.";
    }
    
    header("refresh:5;url=index.php");

    ?>
</body>

</html>
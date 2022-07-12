<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Aula 08</title>
</head>

<body>
    <?php
    // put your code here
    echo "<h1>Trabalhando com variáveis</h1>";
    $num1 = 1;
    $num2 = 2;
    $result = $num1 + $num2;
    echo ("Op1: O resultado da soma é: " . ($num1 + $num2));
    echo "</br>";
    echo ('Op2: O resultado da soma é: <span style="color:blue">' . ($num1 + $num2) . '</span>');
    echo "</br>";
    echo ("Op3: O resultado da soma é: <span style = 'color:blue'> $result </span>");

    echo "<hr/>";
    $nome = "Agnes Vargas";
    $idade = "18";
    if($idade >= 18){
        echo "$nome, você é maior de idade.";
    }
    else{
        echo "$nome, você é menor de idade.";
    }

    echo "<hr/>";
    $nota1 = 8;
    $nota2 = 6;
    $nota3 = 10;
    $result = ($nota1 + $nota2 + $nota3)/3;
    echo (" A média calculada foi: <span style = 'color:blue'> $result </span>");

    echo "<hr/>";
    $funcionario = "juliana";
    $salario = 10800;
    $INSS = 11;
    $INSSDesconto = ($salario / 100 * $INSS);
    $salarioLiquido = $salario - ($salario/100 * 11) ;
    $FGTS = 10800 * 0.08;
    echo ("O salário bruto do funcionário " .  ($funcionario) . ' é: ' . ($salario));
    echo "</br>";
    echo ("O salário líquido do funcionário é: " . ($salarioLiquido));
    echo "</br>";
    echo ("O INSS do funcionário é: " . ($INSSDesconto));
    echo "</br>";
    echo ("O FGTS do funcionário é: " .($FGTS));

    echo "<hr/>";
    $nome = "Juliana";
    $altura = 1.57;
    $peso = 53;
    ?>
    <form action = "calcIMC.php" method = "POST">
        <fieldset>
        <label for = "nome"> Nome Completo: </label>
        <input type = "text" name = "nome" id = "nome">
        </br>
        <label for = "altura"> Altura: </label>
        <input type = "text" name = "altura" id = "altura">
        </br>
        <label for = "peso"> Peso: </label>
        <input type = "int" name = "peso" id = "peso">
        </br>
        <input type="submit" value="Enviar" id="enviar">
        <input type = "reset" value = "Limpar" id = "limpar">
        </fieldset>
    </form>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Exercício Somar - Quarentena </title>
    </head>
    <body>
        <form action ="index.php" method="POST">
        <?php
            if(empty($_POST)){
                echo'<input type="number" name="num1" placeholder= "Digite um número..."/>+
                <input type="number" name="num2" placeholder="Digite outro número..."/>=
                <input type="number" name="resultado" readonly="readonly"/>
                <p><input type="submit" value="Somar"/></p>';
            }else{
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $resultado = $num1 + $num2;
                echo'<input type="number" name="num1" placeholder= "Digite um número..." value="'.$num1.'"/>+
                <input type="number" name="num2" placeholder="Digite outro número..." value="'.$num2.'"/>=
                <input type="number" name="resultado" readonly="readonly" value="'.$resultado.'"/>
                <p><input type="submit" value="Somar"/></p>';
            }
        ?>
        </form>
    <body>
</html>

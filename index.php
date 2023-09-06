<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body{
            background-color: rebeccapurple;
            text-align: center;
            padding-top: 100px;
        }
        h1{
            color: #E0FFFF;
            padding-bottom: 50px;
        }
        h2{
            color: aquamarine;
            padding-top: 50px;
        }
        .numbers{
            color:whitesmoke;
        }

        .operator{
            color:aliceblue;
        }
    </style>
</head>

<body>
<?php

    spl_autoload_register(function ($class) {
       // $class = str_replace('\\', '/', $class); // Convert namespace separators to directory separators
        require_once $class . '.php';
    });

    $num1 = "";
    $num2 = "";
    $operator = "";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num1=$_POST["num1"];
        $operator=$_POST["operator"];
        $num2=$_POST["num2"];     
    }

?>

    <h1>Calculator</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <label for="num1" class="numbers"> Number 1: </label>
    <input type="number" id="num1" name="num1" onfocus="this.value=''" value="<?php echo $num1; ?>" required>
    <br><br>

    <label for="operator" class="operator"> Operator: </label>
    <select id="operator" name="operator">
        <option value="+"> +</option>
        <option value="-"> -</option>
        <option value="*"> *</option>
        <option value="/"> /</option>
    </select>
    <br><br>

    <label for="num2" class="numbers"> Number 2: </label>
    <input type="number" id="num2" name="num2" onfocus="this.value=''" value="<?php echo $num2; ?>" required>
    <br><br>

    <input type="submit" value="Calculate">
    </form>

    <?php
    $calculator=new Calculator();
    $result=$calculator->calculate($num1, $num2, $operator);
    echo "<h2>Result: " . $result . "</h2>";
    ?>

</body>
</html>


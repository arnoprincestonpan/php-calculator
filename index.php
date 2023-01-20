<?php

if(isset($_GET["operation"])){
    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];
    $operand = $_GET["operation"];
    $msg = "";

    if(!is_numeric($num1) || !is_numeric($num2)){
        $msg = "Please enter numbers.";
    }else{
        switch($operand){
            case "+" : 
                $result = $num1 + $num2;
                break;
            case "-" : 
                $result = $num1 - $num2;
                break;
            case "x" : 
                $result = $num1 * $num2;
                break;
            case "/" : 
                if($num2 != 0){
                    $result = $num1 / $num2;
                }else{
                    $result = 0;
                }
                break;
        }
        $msg = "Calculated.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <!-- First Number -->
        <div>
            <label for="number1">First Number</label>
            <input id="number1" value="<?= $num1 ?>" name="number1" type="number"  />
        </div>
        <!-- Second Number -->
        <div>
            <label for="number2">Second Number</label>
            <input id="number2" value="<?= $num2 ?>" name="number2" type="number"  />
        </div>
        <!-- Result Number -->
        <div>
            <label for="result">Result</label>
            <input id="result" value="<?= $result ?>" name="result" type="number" disabled  />
        </div>
        <!-- Operation -->
        <div>
            <input type="submit" id="sum" value="+" name="operation">
            <input type="submit" id="subtract" value="-" name="operation">
            <input type="submit" id="multiply" value="x" name="operation">
            <input type="submit" id="divide" value="/" name="operation">
        </div>
    </form>
    <p><?= $msg ?></p>
</body>
</html>
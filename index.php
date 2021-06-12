<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    
    class calculadora{
        public $num1;
        public $num2;

        function __constructor($num1,$num2){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public static function sumar($num1,$num2){
            return $num1 + $num2;
        }

        public static function restar($num1,$num2){
            return $num1 - $num2;
        }

        public static function multiplicar($num1,$num2){
            return $num1 * $num2;
        }

        public static function dividir($num1,$num2){
            return $num1 / $num2;
        }
    }

    $metodoUtilizado = $_SERVER['REQUEST_METHOD'];
    $calculadora = new Calculadora();

    if((isset($_POST["num1"])) && (isset($_POST["num2"]))){

        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $operacion = $_POST["btnOperacion"];
                
        switch ($operacion){
            case "sumar":
                $resultado = $calculadora->sumar($n1,$n2);
            break;

            case "restar":
                $resultado = $calculadora->restar($n1,$n2);
            break;

            case "dividir":
                $resultado = $calculadora->dividir($n1,$n2);
            break;

            case "multiplicar":
                $resultado = $calculadora->multiplicar($n1,$n2);
            break;
        }
        include('resultado.php');
        include_once('vista.php');
    }else{
        include_once('vista.php');
    }


?>
    
</body>
</html>
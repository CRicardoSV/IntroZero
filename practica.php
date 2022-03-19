<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombrearchivo = "datos.txt";

        $archivo = fopen($nombrearchivo, "w" )
            or die ("Error al abrir el archivo");
            fwrite($archivo,"Practica Integradora <br>");

            $texto= readfile($nombrearchivo);


        $x = mt_rand(10,99)/10;
        echo $x;
        echo "<br>";

        function rand_float($min,$max){
            return mt_rand(10,99)/10;
        }

        $miArreglo = array();

        for ($i=0; $i<10; $i++){
            $x = rand_float(10,99);
            array_push($miArreglo,$x);
        }
        echo "<br>";
        var_dump($miArreglo);
        echo "<br>";
        foreach($miArreglo as $valor) {
            echo $valor;
            echo "<br>";
        }
    ?>

</body>
</html>
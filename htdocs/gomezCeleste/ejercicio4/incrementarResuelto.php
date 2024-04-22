<?php
require_once("../0nav.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>TRABAJOS PRACTICOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin-top: 50px;
            width: 100%;
            min-height: calc(100vh - 200px);
            box-sizing: border-box;
            text-align: center;
            margin: 0;
            padding: 0;

        }
    </style>
</head>
<body>
<section>
<?php
// -----------------------NUMERO------------------------
echo "<h3> RESULTADO EJERCICIO 4 </h3> ";

$numero= isset($_POST["numero"]) ? $_POST["numero"]: "Ingrese un numero ";


function incrementar(&$numero)
{
    $numero++;
}

echo "<h4> El numero antes de icrementar: $numero </h4>";
incrementar($numero);
echo "<p> El numero incrementado: $numero</p>";

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</section>
</body>
<?php
include_once("../0footer.php");
?>
</html>

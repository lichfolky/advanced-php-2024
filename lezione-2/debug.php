<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function provaFn() {
        echo "<h1>Debug</h1>";
        provaFn2();
    }
    function provaFn2() {
        echo "<h1>Debug</h1>";
    }
    $prova = 9;
    $prova += 1;
    echo "<h1>Debug</h1>";
    provaFn();
    echo $prova;
    ?>
</body>

</html>
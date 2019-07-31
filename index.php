<?php 

require __DIR__ . "/vendor/autoload.php";

$subject = new Subject();

$ob1 = new Observer1();
$ob2 = new Observer2();
$ob3 = new Observer3();

$subject->subscribe($ob1);
$subject->subscribe($ob2);
$subject->subscribe($ob3);

if(isset($_REQUEST["numeroPedido"]) && $num = $_REQUEST["numeroPedido"]) {
    $subject->notifyAll($num);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Observer</title>
</head>
<body>
    <h1>Observer Pattern</h1>
    <form method="POST">
        <input type="number" name="numeroPedido" placeholder="Número">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

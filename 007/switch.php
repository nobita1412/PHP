<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="switch.css">
    <title>Document</title>
</head>
<body>
<?php
    $n1 = "";
    $n2 = "";
    $pheptoan = "";
    $result = "";
    if (isset($_POST['number1'])&& isset($_POST['number2']) && isset($_POST['pheptoan'])){
        $n1 = $_POST['number1'];
        $n2 = $_POST['number2'];
        $pheptoan = $_POST['pheptoan'];
        switch ($pheptoan) {
            case "+" : $result = $n1 + $n2;
                break;
            case "/" : $result = $n1 / $n2;
                break;
            case "%" : $result = $n1 % $n2;
                break;
            case "-" : $result = $n1 - $n2;
                break;
            case "*" : $result = $n1 * $n2;
                break;
            default : $result = "+ - * / %";
                break;
        }
    }
?>
    <div class="content">
        <h1>Mo phong may tinh dien tu</h1>
        <form action="#" method="post" name="main-form">
            <div class="row">
                <span>So thu nhat</span>
                <input type="text" name="number1" value="<?php echo $n1; ?>">
            </div>
            <div class="row">
                <span>Phep toan</span>
                <input type="text" name="pheptoan" value="<?php echo $pheptoan; ?>">
            </div>
            <div class="row">
                <span>So thu hai</span>
                <input type="text" name="number2" value="<?php echo $n2; ?>">
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Submit">
            </div>
            <div class="row">
                <p>Ket qua <?php echo $n1 . " " . $pheptoan . " " . $n2 . " = " . $result; ?></p>
            </div>
        </form>
    </div>
</body>
</html>

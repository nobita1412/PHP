<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }
        .content {
            margin: 20px auto;
            width: 600px;
            border: 1px solid #999;
            padding: 10px;
            background: url("#") no-repeat;
            min-height: 200px;
        }
        .content ul {
            margin: 23px 0px 0px 100px;
        }
        .content ul li {
            list-style: decimal;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="content">
        <ul>
            <?php
                for ($i = 0; $i< 10; $i++)
                {
                    echo "<li>Vòng lặp</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>

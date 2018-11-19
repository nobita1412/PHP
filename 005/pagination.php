<?php

?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .center {
            text-align: center;
        }
        .asd {
            display: inline-block;
        }
        .asd a{
            /*display: inline-block;*/
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
        }
        .asd a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .asd a:hover:not(.active) {background-color: #ddd;}
    </style>
</head>
<body>
​<div class="center">
    <div class="asd">
        <a href="#">&laquo;</a>
        <a href="pagination.php?page=1">1</a>
        <a href="pagination.php?page=2" class="active">2</a>
        <a href="pagination.php?page=3">3</a>
        <a href="pagination.php?page=4">4</a>
        <a href="pagination.php?page=5">5</a>
        <a href="pagination.php?page=6">6</a>
        <a href="#">&raquo;</a>
    </div>
    <?php
        $page = (isset($_GET['page'])==true) ? $_GET['page'] : 0;
    ?>
    <p class="result">Ban dang o trang thu <?php echo $page?></p>
</div>
</body>
</html>

<?php
    $day = "";
    $month = "";
    $cung = "";
    $khoang = "";
    $img = "";
    $flag = "";
    if (isset($_POST['day']) && $_POST['month']){
        $day = $_POST['day'];
        $month = $_POST['month'];
        if(is_numeric($day)==true && is_numeric($month)==true)
            {
                $flag = true;
                switch($month){
                    case "1" : if($day<=19 && $day>0){$cung = "Ma Kết"; $khoang = "(22/12 - 19/1)"; $img = "CungMaKet";}else{$cung = "Bảo Bình"; $khoang = "(20/1 - 18/2)"; $img = "CungBaoBinh";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "2" : if($day<=18 && $day>0){$cung = "Bảo Bình"; $khoang = "(20/1 - 18/2)"; $img = "CungBaoBinh";}else{$cung = "Song Ngư"; $khoang = "(19/2 - 20/3)"; $img = "CungSongNgu";}
                        if($day<1 || $day>29) $flag=false;
                        break;
                    case "3" : if($day<=20 && $day>0){$cung = "Song Ngư"; $khoang = "(19/2 - 20/3)"; $img = "CungSongNgu";}else{$cung = "Bạch Dương"; $khoang = "(21/3 - 20/4)"; $img = "CungBachDuong";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "4" : if($day<=20 && $day>0){$cung = "Bạch Dương"; $khoang = "(21/3 - 20/4)"; $img = "CungBachDuong";}else{$cung = "Kim Ngưu"; $khoang = "(21/4 - 20/5)"; $img = "CungKimNguu";}
                        if($day<1 || $day>30) $flag=false;
                        break;
                    case "5" : if($day<=20 && $day>0){$cung = "Kim Ngưu"; $khoang = "(21/4 - 20/5)"; $img = "CungKimNguu";}else{$cung = "Song Tử"; $khoang = "(21/5 - 21/6)"; $img = "CungSongTu";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "6" : if($day<=21 && $day>0){$cung = "Song Tử"; $khoang = "(21/5 - 21/6)"; $img = "CungSongTu";}else{$cung = "Cự Giải"; $khoang = "(22/6 - 22/7)"; $img = "CungCuGiai";}
                        if($day<1 || $day>30) $flag=false;
                        break;
                    case "7" : if($day<=22 && $day>0){$cung = "Cự Giải"; $khoang = "(22/6 - 22/7)"; $img = "CungCuGiai";}else{$cung = "Sư Tử"; $khoang = "(23/7 - 22/8)"; $img = "CungSuTu";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "8" : if($day<=22 && $day>0){$cung = "Sư Tử"; $khoang = "(23/7 - 22/8)"; $img = "CungSuTu";}else{$cung = "Xử Nữ"; $khoang = "(23/8 - 22/9)"; $img = "CungXuNu";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "9" : if($day<=22 && $day>0){$cung = "Xử Nữ"; $khoang = "(23/8 - 22/9)"; $img = "CungXuNu";}else{$cung = "Thiên Bình"; $khoang = "(23/9 - 23/10)"; $img = "CungThienBinh";}
                        if($day<1 || $day>30) $flag=false;
                        break;
                    case "10" : if($day<=23 && $day>0){$cung = "Thiên Bình"; $khoang = "(23/9 - 23/10)"; $img = "CungThienBinh";}else{$cung = "Bọ Cạp"; $khoang = "(24/10 - 22/11)"; $img = "CungBoCap";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    case "11" : if($day<=22 && $day>0){$cung = "Bọ Cạp"; $khoang = "(24/10 - 22/11)"; $img = "CungBoCap";}else{$cung = "Nhân Mã"; $khoang = "(23/11 - 21/12)"; $img = "CungNhanMa";}
                        if($day<1 || $day>30) $flag=false;
                        break;
                    case "12" : if($day<=21 && $day>0){$cung = "Nhân Mã"; $khoang = "(23/11 - 21/12)"; $img = "CungNhanMa";}else{$cung = "Ma Kết"; $khoang = "(22/12 - 19/1)"; $img = "CungMaKet";}
                        if($day<1 || $day>31) $flag=false;
                        break;
                    default : $flag = false;
                        break;
                }
            }
        else
            $flag = false;
    }
?>
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
            text-align: center;
            border: 1px
        }
        .content input[name=day] {
            width: 18px;
            font-size: 16px;
            margin-top: 10px;
            margin-right: 20px;
        }
        .content input[name=month] {
            width: 18px;
            font-size: 16px;
            margin-top: 10px;
        }
        .content input[type=submit] {
            border-radius: 15px;
            border: 1px solid #8d8d8d;
            background-color: #4CAF50;
            color: #fff;
            height: 30px;
            width: 100px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <form name="tracunghoangdao" method="post" action="index.php">
            <label>D </label><input type="text" name="day">
            <label>M </label><input type="text" name="month"><br>
            <input type="submit" value="Tra cứu">
            <div class="result">
                    <?php
                        if ($flag == false) {
                            echo "Dữ liệu không hợp lệ!";
                        } else if ($flag == true){
                            echo "<img src='images/" . $img . ".png'>";
                            echo "<p>$cung</p>";
                            echo "<p>$khoang</p>";
                        } else {}
                    ?>
            </div>
        </form>
    </div>
</body>
</html>

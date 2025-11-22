<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Buổi 1 PHP</title>
</head>
<body>
    <?php
        // 1. In ra màn hình
        echo "Hello World! <br>";

        echo "Hi";

        // 2. Biến
        // Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Hoang";
        $tuoi = "36";

        echo " " . $ten . " " . $tuoi . " tuổi <br>";

        // 3. Hằng
        define ("soPi","3,14");
        echo " " . soPi . "<br>";

        // 4. Phân biệt ' ' và " "
        echo '$ten'. "<br>";
        echo "$ten" . "<br>";

        // 5. Chuỗi
        # 5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        # 5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        # 5.3 Tìm kiếm kí tự trong chuỗi
        echo strpos($ten, "a") . "<br>";
        # 5.4 Thay thế kí tự trong chuỗi
        echo str_replace("Hoang","Hoan",$ten) . "<br>";
        
        // 6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;

        # + - * /
        # += -= *= /= %=
        # so sánh == != > < >= <= ===
        echo $soThuNhat + $soThuHai . "<br>";

        // 7. Câu điều kiện
        // if ( Điều kiện )
            // logic
        // elseif ( Điều kiện )
            // logic
        // else 
            // logic
        
        $tong = $soThuNhat + $soThuHai;
        echo $tong;

        if ($tong < 15) {
            echo " nhỏ hơn 15 <br>";
        }
        elseif ($tong = 15) {
            echo " tổng = 15 <br>";
        }
        else {
            echo " Tổng > 15 <br>";
        };

        // 8. Switch Case
        $color = "red";
        switch ($color) {
            case "red":
                echo "is red <br>";
                break;
            case "blue":
                echo "is blue <br>";
                break;
            default:
                echo "no color <br>";
                break;
        }

        // 9. For
        for ($i=0; $i < 100; $i++) {
            echo $i . "<br>";
        }

        // 10. Mảng
        $mang = ["An", "Nhat Anh", "Vu Anh"];

        # Đếm phần tử trong mảng
        echo count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r ($mang) . "<br>";
        $mang[0] = "Hai Anh" . "<br>";
        print_r ($mang) . "<br>";

        # Xóa
        unset($mang[3]);
        print_r ($mang);
    ?>
</body>
</html>
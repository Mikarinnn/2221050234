<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nguoidung</title>
    <style>
        
    </style>
</head>
<body>
    <h1>quản lý thông tin người dùng</h1>
    <table border="1">
        <tr>
            <td>Họ Tên</td>
            <td>Tên đăng nhập</td>
            <td>email</td>
            <td>số điện thoại</td>
            <td>ID Vai Trò</td>
            <td>Ngày Sinh</td>
            <td>chức năng</td>
        </tr>
    <?php
        include("connect.php");
        $sql = "SELECT * FROM nguoi_dung nd JOIN vai_tro q on nd.vai_tro_id = q.id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){

        
    ?>
        <tr>
            <td><?php echo $row["ho_ten"]?></td>
            <td><?php echo $row["ten_dang_nhap"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["sdt"]?></td>
            <td><?php echo $row["vai_tro_id"]?></td>
            <td><?php echo $row["ngay_sinh"]?></td>
            <td>
               
                 <a class="btn_them" href="themmoinguoidung.php">thêm người dùng</a>
                <a href="capnhatnguoidung.php?id=<?php echo $row["id"] ?>">cập nhật</a>
               <a href="xoanguoidung.php?id=<?php echo $row["id"] ?>">Xóa</a>


            </td>
           
        </tr>
        <?php }?>
    </table>
</body>
</html>
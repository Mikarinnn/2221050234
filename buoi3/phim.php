<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phim</title>
</head>
<body>
    <h1>quản lý phim</h1>

    <table border="1">
        <tr>
            <td>id phim</td>
            <td>Tên Phim</td>
            <td>Đạo Diễn</td>
            <td>Quốc Gia</td>
            <td>Năm Phát Hành</td>
            <td>Poster</td>
            <td>Trailer</td>
            <td>Mô tả</td>
            <td>Cập Nhật</td>
        </tr>
        <?php
        //ket noi bang
        include("connect.php");
        $sql = "SELECT * FROM phim"; 
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
              <td><?php echo $row["ten_phim"]?></td>
            <td><?php echo $row["dao_dien_id"]?></td>
            <td><?php echo $row["quoc_gia_id"]?></td>
            <td><?php echo $row["nam_phat_hanh"]?></td>
            <td><?php echo $row["poster"]?></td>
            <td><?php echo $row["trailer"]?></td>
            <td><?php echo $row["mo_ta"]?></td>
                     

            <td>
            <a href="updatephim.php?id=<?php echo $row["id"]; ?>">cập nhật</a>
            <a href="themphim.php">thêm</a>
            <a href="xoaphim.php?id=<?php echo $row["id"]; ?>">xóa</a>
        </td>
            
        </tr>
        <?php }?>
        
        
        <tr>
            
    </table>
</body>
</html>
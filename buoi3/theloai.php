<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>theloai</title>
</head>
<body>
    <h1>Thể loại</h1>
    <table border = "1">
        <tr>
            <th>Tên Phim</th>
            <th>Thể Loại</th>
            <th>Cập Nhật</th>
        </tr>
        <?php
            // nap file lien ket sql
            include("connect.php");
            $sql = "SELECT* FROM the_loai ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["ten_the_loai"]?></td>

            <td>
                <a href="" <?php $row["id"]; ?>>cập nhật</a>
                <a href="themtheloai.php">thêm</a>
                <a href="" <?php $row["id"]; ?>>xóa</a>
            </td>
            
        </tr>
        <?php }?>
    </table>
</body>
</html>
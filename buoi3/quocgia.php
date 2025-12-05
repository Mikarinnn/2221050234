<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quốc gia</h1>
    <table border="1">
        <tr>
            <th>Tên Phim</th>
            <th>Quốc Gia</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM quoc_gia qg JOIN phim P ON P.id = qg.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_phim"]?></td>
            <td><?php echo $row["ten_quoc_gia"]?></td>
           
        </tr>
        <?php }?>
    </table>
</body>
</html>
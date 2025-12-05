<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin người dùng</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: #fff;
}

h1{
    text-align:center;
    margin-bottom: 15px;
}

/* --- Bảng --- */
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}

/* --- Tiêu đề bảng --- */
table th {
    background: #4f81bd;         /* Màu xanh header giống ảnh */
    color: white;
    padding: 8px 6px;
    border: 1px solid #ddd;
    text-align: center;
}

/* --- Dòng dữ liệu --- */
table td {
    border: 1px solid #ddd;
    padding: 7px;
}

/* --- Hover cho hàng --- */
table tr:hover {
    background-color: #f1f1f1;
}

/* Nút Sửa */
button {
    background: #3498db;
    border: none;
    padding: 5px 10px;
    color: white;
    border-radius: 3px;
    cursor: pointer;
}

button:hover{
    opacity: 0.8;
}

/* Nút Xóa màu đỏ như ảnh */
a.xoa button{
    background: #e74c3c;
}

        
    </style>
</head>
<body>
    <h1>Thông tin người dùng</h1>
    <table>
        <tr>
            <th>Tên đăng nhập</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql = "SELECT nd.*, vt.ten_vai_tro 
                    FROM nguoi_dung nd 
                    JOIN vai_tro vt ON nd.vai_tro_id = vt.id";
            $result = mysqli_query($conn, $sql);

           
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['ten_dang_nhap']; ?></td>
            <td><?php echo $row['ho_ten']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['ten_vai_tro']; ?></td>
            <td><?php echo $row['ngay_sinh']; ?></td>
            <td>
                <button>Sửa</button>
                <a class="xoa" href="xoanguoidung.php?id=<?php echo $row["id"] ?>"><button>>Xóa<</button></a>
            </td>
        </tr>
        <?php } ?> 
    </table>
</body>
</html>

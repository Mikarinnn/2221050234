<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          form {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
        }
        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        input, select {
            margin-bottom: 10px;
            padding: 8px;
        }
        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <label for="">thêm id thể loại</label>
        <input type="text" placeholder="thêm id" name="id">

        <label for="">thêm tên thể loại</label>
        <input type="text" placeholder="thêm tên thể loại" name="ten_the_loai">
        <button type="submit">thêm thể loại</button>
    </form>

    <?php
    if(!empty($_POST["ten_the_loai"])){ 
    
        $ten_the_loai = $_POST["ten_the_loai"];

    include("connect.php");
    $sql = "INSERT INTO the_loai (ten_the_loai) VALUES (?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt === false) {
        die('Lỗi SQL Prepare: ' . mysqli_error($conn));
    }
    
    mysqli_stmt_bind_param($stmt, 's', $ten_the_loai);
    
    if(mysqli_stmt_execute($stmt)){
        header("Location: admin.php?page_layout=theloai");
        exit();
    }else{
        echo "Lỗi khi thêm: ". mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
    
    }else{
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Vui lòng nhập đủ thông tin!";
        }
    }
?>
    </div>

</body>
</html>
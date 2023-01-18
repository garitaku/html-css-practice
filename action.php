<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力完了</title>
</head>
<body>
    <h1>入力完了画面</h1>
    <p>入力完了しました</p>
    <p>入力内容</p>
    <p>名前：<?php echo htmlspecialchars($_POST['name']); ?></p>
    <p>メールアドレス：<?php echo htmlspecialchars($_POST['email']); ?></p>
    <p>コメント：<?php echo htmlspecialchars($_POST['comment']); ?></p>
    
    <?php
    $host='localhost';
    $username='root';
    $passwd='';
    $dbname='phptest';
    $conn=mysqli_connect($host,$username,$passwd,$dbname);
    if ($conn==false) {
        die("エラー：接続できませんでした。".mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

    $sql="INSERT INTO `form_test`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";

    if (mysqli_query($conn,$sql)) {
        echo "<h3>データベースに正常に保存された。</h3>";
    }else {
        echo "エラー：$sql".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

</body>
</html>


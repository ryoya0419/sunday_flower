<?php
//POSTで送られたデータを取得する
$menu = htmlspecialchars($_POST['menu']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$detail = htmlspecialchars($_POST['detail']);

$flg = 0;
if(empty($name)){
    $flg = 1;
    $name = '<span class="attention">氏名を入力してください</span>';
}
if(empty($email)){
    $flg = 1;
    $email = '<span class="attention">メールアドレスを入力してください</span>';
}
if(empty($detail)){
    $flg = 1;
    $detail = '<span class="attention">お問合せ内容を入力してください</span>';
}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品紹介</title>
    <!-- リセットCSS -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <!--GoogleFontsのCSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <!-- 自分のCSS -->
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="../assets/css/shop_item.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <script>console.log("")</script>
</head>

<body>
    <div class="container">
        <header>
            <div class="header_inner">
                <h1 class="logo">
                    <a href="../index.html"><img class="logo_img" src="../assets/img/logo_noleft.svg"
                            alt="sunday flower"></a>
                </h1>
                <div class="hum_menu">
                    <span class="hum_menu_line"><span class="line_middle"></span></span>
                    <span class="hum_menu_text">MENU</span>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.html">トップ</a></li>
                        <li><a href="../shop_item.html">商品紹介</a></li>
                        <li><a href="#">オンラインショップ</a></li>
                        <li><a href="#">アクセス</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="contact contact_check">
            <h2>入力情報の確認</h2>

            <div class="form_table form_table_check">

             <dl>
                <dt>メニュー</dt>
                <dd><?php echo $menu; ?></dd>
             </dl>
             <dl>
                <dt>氏名</dt>
                <dd><?php echo $name; ?></dd>
             </dl>
             <dl>
                <dt>メールアドレス</dt>
                <dd><?php echo $email; ?></dd>
             </dl>
             <dl>
                <dt>お問合せ内容</dt>
                <dd><?php echo $detail; ?></dd>
             </dl>
             <?php if($flg): ?>
                <button type="button" class="contact_btn" onClick="history.back();">戻る</button>
             <?php else: ?>
                <form action="thanks.php" method="post">
                        <input type="hidden" name="menu" value="<?php echo $menu;?>">
                        <input type="hidden" name="name" value="<?php echo $name;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="detail" value="<?php echo $detail;?>">
                      <div class="check_btn">
                        <button type="submit" class="contact_btn">送信する</button>
                        <button type="button" class="contact_btn" onClick="history.back();">戻る</button>
                      </div>
                </form>
             <?php endif; ?>
            
            </div>

        </section>

        <footer>
            <p>&copy;2023 akebonobashiseika Co.,Ltd.</p>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../assets/js/shop_item.js"></script>
</body>

</html
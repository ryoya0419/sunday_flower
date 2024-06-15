<?php
// POSTで送られたデータを取得する
$menu = htmlspecialchars($_POST['menu']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$detail = htmlspecialchars($_POST['detail']);

//自動返信メールを送信
$email_title = '【sunday flower】お問合せ承りました';

$email_body = <<<email
{$name}様

以下の内容で承りました。

メニュー
{$menu}

メールアドレス
{$email}

ご質問
{$detail}

追って担当のものよりご連絡いたします。

//////////////////
花屋 sunday flower
email;

$email_from = 'From:info@sunday_flower.net';

mb_internal_encoding("UTF-8");
mb_language("japanese");
/*
mb_send_mail('宛先','メールのタイトル','メールの本文','誰からのメールか');
*/
mb_send_mail($email,$email_title,$email_body,$email_from);

$tanto = 'info@sunday_flower.net';
$tanto_title = 'HPよりお問合せがありました';
$tanto_body = <<<tanto
HPよりお問合せがありました

メニュー
{$menu}

氏名
{$name}様

メールアドレス
{$email}

お問合せ内容
{$detail}
tanto;

$tanto_from = 'From:info@sunday_flower.net';

mb_internal_encoding("UTF-8");
mb_language("japanese");
/*
お店側に送るメール
*/
mb_send_mail($tanto,$tanto_title,$tanto_body,$tanto_from);

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
    <!--Google Fonts iconのCSS -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

        <section class="contact contact_fin">
            <h2><span class="material-symbols-outlined">mail</span>送信完了</h2>
            <div class="form_table">
             <a href="../index.html" class="to_top">トップへ戻る</a>
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
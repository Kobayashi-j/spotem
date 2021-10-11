<!--ゲスト側マイページ-->
    
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotem / </title>
    <link rel="stylesheet" href="../view/css/show.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../view/js/show.js" defer></script>

</head>

<body>
    <?php 
    if (true){/*一般ユーザーのページ*/ 
    ?>
    <div class="_profile">
        <div class="_square"></div>
        
        <img class="_usericon" src="../view/img/cafe.png" alt="ユーザーアイコン">
        <button class="_followbutton" type="submit">フォロー</button>
        <p class="_username">naotoge5</p>
        <div class="_profilebox">
        <p class="_profiletext">滋賀県在住のnaotoge5です。<br>よろしくお願いします。</p>
        </div>
    </div>

    <div class="_profiletabs _twotabs">
        <input id="post" type="radio" name="_tab_item" checked>
        <label class="_tab_item" for="post">投稿</label>

        <input id="like" type="radio" name="_tab_item">
        <label class="_tab_item" for="like">いいね</label>
    
        <div class="_tab_content" id="post_content">
        投稿を一覧表示
        あ<br>
        い<br>
        う<br>
        え<br>
        お<br>
        か<br>
        き<br>
        く<br>
        け<br>
        こ<br>
        さ<br>
        し<br>
        す<br>
        せ<br>
        そ<br>
        た<br>
        ち<br>
        つ<br>
        て<br>
        と<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        end
        </div>
        <div class="_tab_content" id="like_content">
        いいねした投稿を一覧表示
        </div>
    </div>

    <?php
    }else{/*お店のページ*/ 
    ?>
     <div class="_profile">
        <div class="_square"></div>
        
        <img class="_usericon" src="../view/img/user2.png" alt="ユーザーアイコン">
        <button class="_followbutton" type="submit">フォロー</button>
        <p class="_username">喫茶A</p>
        <div class="_profilebox">
        <p class="_profiletext">おいしいコーヒーと安らぎ空間をご提供します。<br></p>
        </div>
    </div>

    <div class="_profiletabs">
        <input id="post" type="radio" name="_tab_item" checked>
        <label class="_tab_item" for="post">投稿</label>

        <input id="coupon" type="radio" name="_tab_item">
        <label class="_tab_item" for="coupon">キャンペーン</label>
        <input id="info" type="radio" name="_tab_item">
        <label class="_tab_item" for="info">店舗情報</label>

        <input id="photo" type="radio" name="_tab_item">
        <label class="_tab_item" for="photo">写真</label>
    
        <div class="_tab_content" id="post_content">
        投稿を一覧表示
        </div>
        <div class="_tab_content" id="coupon_content">
        フェア・クーポンを一覧表示
        </div>
        <div class="_tab_content" id="info_content">
        店舗情報を一覧表示
        </div>
        <div class="_tab_content" id="photo_content">
        写真を一覧表示
        </div>
    </div>
    <?php
    }
    ?>


</body>

</html>
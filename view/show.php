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
    if (false){/*一般ユーザーのページ*/ 
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
        <br>
        縦<br>
        ス<br>
        ク<br>
        ロ<br>
        ｜<br>
        ル<br>
        し<br>
        ま<br>
        す<br>
        。<br>
        1<br>
        2<br>
        3<br>
        4<br>
        5<br>
        6<br>
        7<br>
        8<br>
        9<br>
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
        
        <img class="_usericon" src="../view/img/cafe.png" alt="ユーザーアイコン">
        <button class="_followbutton" type="submit">フォロー</button>
        <p class="_username">喫茶A</p>
        <div class="_profilebox">
        <p class="_profiletext">おいしいコーヒーと安らぎ空間をご提供します。<br></p>
        </div>
    </div>

    <table class="_profiletable">
            <p class="_infohead">店舗情報</p>
            <tr>
                <th>店名</th>
                <td>喫茶・A店</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>A県B市C町-1</td>
            </tr>
            <tr>
                <th>電話</th>
                <td>123-456-7890</td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td>水曜定休<br>
                    11:00~17:00
                </td>
            </tr>
        </table>
    </div>

    <div class="_profiletabs">
        <input id="post" type="radio" name="_tab_item" checked>
        <label class="_tab_item" for="post">投稿</label>

        <input id="coupon" type="radio" name="_tab_item">
        <label class="_tab_item" for="coupon">キャンペーン</label>

        <input id="photo" type="radio" name="_tab_item">
        <label class="_tab_item" for="photo">写真</label>
    
        <div class="_tab_content" id="post_content">
        投稿を一覧表示
        </div>
        <div class="_tab_content" id="coupon_content">
        フェア・クーポンを一覧表示
        <table class="_tabtable">
            <p>フェア情報</p>
            <tr>
                <th>内容</th>
                <td>期間限定商品AA</td>
            </tr>
            <tr>
                <th>期間</th>
                <td>2022年 1月1日~1月31日</td>
            </tr>
        </table>

        <table class="_tabtable">
            <p>クーポン</p>
            <tr>
                <th>内容</th>
                <td>AAセット200円OFF</td>
            </tr>
            <tr>
                <th>期間</th>
                <td>2022年 1月1日~1月31日</td>
            </tr>
            <tr>
                <th>利用条件</th>
                <td>14:00までにご来店のお客様限定です</td>
            </tr>
        </table>

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
<?php
require_once 'controller/autoload.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotem - 検索</title>
    <link rel="stylesheet" href="view/css/bulma.css">
    <link rel="stylesheet" href="view/css/origin.css">
    <link rel="stylesheet" href="view/css/search.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="view/js/search.js" defer></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=<?php //echo $_ENV['MAP_API_KEY'] ?>&callback=initMap" async></script>-->
    <link rel="manifest" href="manifest.json">
</head>

<body>
    <!--
    <div class="_head has-background-white">
        <table class="table is-fullwidth">
            <tr>
                <td class="_migi">
                    <figure class="image is-48x48">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                </td>
                <td>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input is-rounded" type="text" placeholder="キーワード検索">
                            <span class="icon is-small is-left">
                                <i class="fas fa-search"></i>
                            </span>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </div>-->
    <div class="_fixed-top has-background-white">
        <div class="is-flex is-align-items-center is-justify-content-center p-2">
            <div class="p-2 is-flex-grow-0">
                <figure class="image is-32x32">
                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                </figure>
            </div>
            <div class="p-2 is-flex-grow-1">
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-rounded is-small" type="text" placeholder="キーワード検索">
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="tabs is-centered is-fullwidth">
            <ul>
                <li class="is-active"><a>アカウント</a></li>
                <li><a>コミュニティ</a></li>
            </ul>
        </div>
    </div>

    <div>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
        content<br>
    </div>
    <!--<div id="map"></div>-->
    <div class="tabs is-centered is-fullwidth has-background-white _menubar">
        <ul>
            <li><a href="http://"><span class="icon"><i class="far fa-edit"></i></span></a></li>
            <li><a href="home.php"><span class="icon"><i class="fas fa-home"></i></span></a></li>
            <li class="is-active"><a href="search.php"><span class="icon"><i class="fas fa-search"></i></span></a></li>
            <li><a href="settings.php"><span class="icon"><i class="fas fa-cog"></i></span></a></li>
        </ul>
    </div>
</body>

</html>
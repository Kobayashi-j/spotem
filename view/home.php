<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home.php</title>
    <link rel="stylesheet" href="../view/css/bulma.css">
    <link rel="stylesheet" href="../view/css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script>
        let tabsWithContent = (function() {
            let tabs = document.querySelectorAll('.tabs li');
            let tabsContent = document.querySelectorAll('.tab-content');

            let deactvateAllTabs = function() {
                tabs.forEach(function(tab) {
                    tab.classList.remove('is-active');
                });
            };

            let hideTabsContent = function() {
                tabsContent.forEach(function(tabContent) {
                    tabContent.classList.remove('is-active');
                });
            };

            let activateTabsContent = function(tab) {
                tabsContent[getIndex(tab)].classList.add('is-active');
            };

            let getIndex = function(el) {
                return [...el.parentElement.children].indexOf(el);
            };

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    deactvateAllTabs();
                    hideTabsContent();
                    tab.classList.add('is-active');
                    activateTabsContent(tab);
                });
            })

            tabs[0].click();
        })();
    </script>
</head>

<body>
    <header class="has-text-centered">
        <!--自分のアイコン表示-->
        <figure class="myicon">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
        <div class="hero is-info is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">ホーム</h1>
                </div>
            </div>
        </div>
    </header>

    <div id="tabs-with-content">
        <div class="tabs is-centered">
            <ul>
                <li><a>公式</a></li>
                <li><a>一般</a></li>
            </ul>
        </div>
        <div>
            <section class="tab-content">
                <div class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p><strong>ジョウ</strong><br>
                                こんにちは
                            </p>
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    <a class="level-item">
                                        <small>位置情報</small>
                                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                                    </a>
                                    <a class="level-item">
                                        <small>いいね</small>
                                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                                    </a>
                                    <a class="level-item">
                                        <small>シェア</small><br>
                                        <span class="icon is-small"><i class="fas fa-reply"></i></span>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
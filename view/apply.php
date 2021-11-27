<?php include "controller/include/apply.php" ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=<?= $_ENV['MAP_API_KEY'] ?>&libraries=places"></script>
    <script src="../view/js/apply.js" type="module" defer></script>

    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="border-b border-gray-200 text-center py-3 font-bold">
        公式申請
    </div>
    <!--php:$_SERVER['HTTP_REFERER']実装-->
    <a href="/?home" class="absolute top-0 p-3">
        <i class="fas fa-chevron-left"></i>
    </a>
    <div class="pt-20 px-8">
        <form action="/" method="post">
            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2">営業許可証の登録</p>
            <hr class="border-yellow-900 my-2">
            <p class="p-2">
                <label class="text-blue-900">
                    <span title="ファイルを選択">
                        <i class="far fa-image"></i>
                    </span>
                    <input type="file" name="accept_image" accept=".png, .jpg, .jpeg, .pdf" class="hidden">
                    画像の選択
                </label>
            </p>
            <div id="Preview" class="px-2 pt-2"></div>

            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2 mt-6">店舗情報</p>
            <hr class="border-yellow-900 my-2">
            <p class="m-2 font-bold">店舗名</p>
            <input type="text" name="store_name" placeholder="" class="w-5/6 ml-2 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["store_name"]) ? $_POST["store_name"] : '' ?>" required />
            <p class="m-2 font-bold">電話番号</p>
            <input type="text" name="tel1" maxlength="4" pattern="\d{2,4}" class="w-1/5 ml-2 mr-1 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["tel1"]) ? $_POST["tel1"] : '' ?>" required />
            -
            <input type="text" name="tel2" maxlength="4" pattern="\d{3,4}" class="w-1/5 mx-1 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["tel2"]) ? $_POST["tel2"] : '' ?>" required />
            -
            <input type="text" name="tel3" maxlength="4" pattern="\d{3,4}" class="w-1/5 ml-1 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["tel3"]) ? $_POST["tel3"] : '' ?>" required />
            <p class="m-2 font-bold">郵便番号</p>
            <!-- \d{3}-\d{4} -->
            <input type="text" name="postal1" maxlength="3" pattern="\d{3}" class="w-1/5 ml-2 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["postal"]) ? $_POST["postal"] : '' ?>" required />
            -
            <input type="text" name="postal2" maxlength="4" pattern="\d{4}" class="w-1/3 ml-2 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["postal"]) ? $_POST["postal"] : '' ?>" required />
            <button type="button" class="ml-2 px-2 py-1 bg-yellow-300 hover:bg-yellow-400 border-gray-300 rounded-md j-auto_address">住所検索</button>
            <p class="m-2 font-bold">都道府県</p>
            <select name="prefecture" class="ml-2 border border-gray-200" required>
                <option value="" selected="selected">選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
            <p class="m-2 font-bold">市区町村</p>
            <input type="text" name="city" class="w-4/5 ml-2 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["store_name"]) ? $_POST["store_name"] : '' ?>" required />
            <p class="m-2 font-bold">町名番地</p>
            <input type="text" name="town" class="w-4/5 ml-2 p-1 bg-gray-50 border border-gray-200 rounded-md outline-none" value="<?= isset($_POST["store_name"]) ? $_POST["store_name"] : '' ?>" required />

            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2 mt-6">その他</p>
            <input type="submit" class="w-full my-6 py-1 bg-yellow-300 rounded-md" value="確認" />
        </form>
        <div class="text-xs text-gray-400 text-right mt-2">
            企業の方は<a href="/" class="text-blue-900">こちら</a>
        </div>
    </div>
    <footer>
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../view/css/bulma.css">-->
    <!--アイコンCSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <!--リセットCSS-->
    <link href="../view/css/tailwind.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../view/js/s1.js" type="module" defer></script>
    <title>新規作成</title>
</head>

<body>
    <div class="border-b border-grey-200">
        <a href="/?search" class="inline-block p-3">
            <span class="mr-2"><i class="fas fa-arrow-left"></i></span>戻る
        </a>
    </div>
    <div class="flex justify-between">
        <div class="p-3">
            <img src="../view/img/naotoge5.png" alt="" class="w-12 border border-yellow-600 rounded-full">
        </div>
        <div class="flex-auto p-3">
            <textarea name="" id="" rows="10" class="outline-none bg-transparent resize-none w-full"></textarea>
            <div class="flex border-t border-yellow-600">
                <label class="ml-4 my-2 text-yellow-800">
                    <span title="ファイルを選択">
                        <i class="far fa-image"></i>
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
                <label class="ml-4 my-2 text-yellow-800">
                    <span title="ファイルを選択">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                </label>
            </div>
        </div>

    </div>
</body>

</html>
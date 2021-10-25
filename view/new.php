<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/new.js"></script>

    <title>新規作成</title>
</head>

<body>
    <div class="border-b border-gray-200">
  
        <!--php:$_SERVER['HTTP_REFERER']実装-->
        <a href="/?home" class="inline-block p-3">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    <div class="p-3">
        <p class="text-lg"><i class="fas fa-map-marker-alt"></i>&nbsp;アカウント・場所</p>
        <input type="text" placeholder="どこで？" class="w-full bg-transparent outline-none" />
        <div class="border-b border-yellow-600">

        </div>
    </div>
    <div class="p-3">
        <textarea name="" id="" rows="5" class="outline-none bg-transparent resize-none w-full"></textarea>
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
    <!-- Tabs -->
    <div id="" class="flex w-full bg-white fixed bottom-0 border-t border-gray-200">
        <a href="/?home" class="flex-grow flex items-center justify-center">
            <i class="fas fa-home text-xl"></i>
        </a>
        <a href="/?naotoge5" class="flex-grow flex items-center justify-center py-3">
            <img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        </a>
        <a href="/?new" class="flex-grow flex items-center justify-center">
            <i class="far fa-edit text-xl text-yellow-600"></i>
        </a>
        <!--<img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        <li class="w-full"><a href="/?search" class="block w-full text-center py-3 bg-yellow-500 text-white"><i class="far fa-search"></i></a></li>
        <li class="w-full"><a href="/?settings" class="block w-full text-center py-3 bg-yellow-50 hover:bg-yellow-100 text-gray-500"><i class="fas fa-user-circle"></i></a></li>
        -->
    </div>
</body>

</html>
<?php require_once("class.php"); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <title>家計簿集計</title>
</head>
<body>
<div id="title_area">
    <div id="mark">
        <img src="./img/logo.png" alt="" width="150px" height="150px">
    </div>
    <div id="title">
        <h1>AutoSum</h1>  
        <h3>～家計簿自動集計アプリ～</h3> 
    </div>
    
</div>
<!-- sum.phpにデータを送る。 -->
 <form action="sum.php" method="post">
    <div id="items">
        <?php foreach($items as $item): ?>  
            <div id="item">
                <!-- アイコン -->
                <i id="icon" class='<?php echo $item->getIcon() ?> fa-4x'></i>
                <div id="text">
                    <!-- 項目名 -->
                    <p class="item_name"><?php echo $item->getName() ?></p>
                    <!-- 金額入力するテキスト -->
                    <input class="item_cost" type="text" value="0" name="<?php echo $item->getName()?>" >円
                </div>  
            </div>
        <?php endforeach?> 
        
    </div>
    <div id="btn">
        <!-- 送信ボタン -->
        <input type="submit" value="集計する">
    </div>
 </form>
</body>
</html>
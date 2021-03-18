<?php require_once("class.php");?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <title>集計結果</title>
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

<h2>集計結果が出ました。</h2>

<!-- それぞれの数値 -->
<div id="cost_amount">
    
    <?php foreach($items as $item) :?>

        <?php 
            // 入力した金額データを$cost_new変数に入れる。
            $cost_new=$_POST[$item->getName()];

            // インスタンスの$costプロパティを変更する。
            $item->setCost($cost_new);

            // $costの数値を足していく。
            $totalCost += $item->getCost();
        ?>
        <div id="data">

            <!-- 項目 -->
            <i id="icon_2" class='<?php echo $item->getIcon() ?> fa-2x'></i><p><?php echo $item->getName() ?></p>

            <!-- 入力した数値 -->
            <p><?php echo $item->getCost() ?>円</p>
        </div>
            
     <?php endforeach?>   
</div>

<!-- 合計 -->
<div id="sum">
    <h2>合計金額：<?php echo $totalCost?>円</h2>
</div>
</body>
</html>
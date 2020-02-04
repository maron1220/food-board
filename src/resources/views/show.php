<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("layouts/meta.php"); ?>
</head>
<body>
    <div id="wrapper"> 
    <?php include("layouts/header.php"); ?>
        <main style="padding-bottom:20px;">
           
            <div class="container">
                <div class="mb-4 text-left" style="padding-top:20px;">
                    <a href="/" class="btn btn-primary">
                        TOPに戻る
                    </a>
                <div class="mb-4 text-right" style="padding-top:20px;">
                    <a href=<?php echo "/edit/".$post["id"]; ?> class="btn btn-primary">
                        編集する
                    </a>
                    <a href=<?php echo "/destroy/".$post["id"]; ?> class="btn btn-danger">
                        削除する
                    </a>
                </div>
                
                <div class='card mb-4'>
                    <div class='card-header'>
                    <?php $title = $post["title"]; ?>
                        <?php if ($title != null): ?>
                                <p>[food名]<?php echo $title;?></p>
                                <?php else: ?>
                                <p>[food名]記入がありません｡</p>
                                <?php endif; ?>
                                <?php $name = $post["name"]; ?>
                        <?php if ($name != null): ?>
                                <p>[投稿者]<?php echo $name;?></p>
                                <?php else: ?>
                                <p>[投稿者]名無しさん</p>
                                <?php endif; ?>
                    </div>
                    <div class='card-body'>
                    <p class='card-text'>
                            <?php $body = $post["body"];?>
                            <?php if ($body != null): ?>
                                <?php echo $body;?>
                                <?php else: ?>
                                <p>本文がありません｡</p>
                                <?php endif; ?>
                            
                        </p>

                    </div>
                    <div class='card-footer'>
                    <?php $appetite = $post["appetite"];?> 
                        <?php $size = $post["size"];?>
                        <?php $price = $post["price"];?>
                        <?php $price_range = $post["price_range"];?>
                        <?php
                        switch ($appetite):
                            case 1:
                        ?>
                        <p>食いつき ★☆☆☆☆</p>
                            <?php break; ?>
                        <?php case 2: ?>
                            <p>食いつき ★★☆☆☆</p>
                            <?php break; ?>
                        <?php case 3: ?>
                            <p>食いつき ★★★☆☆</p>
                            <?php break; ?>
                        <?php case 4: ?>
                            <p>食いつき ★★★★☆</p>
                            <?php break; ?>
                        <?php case 5: ?>
                            <p>食いつき ★★★★★</p>
                            <?php break; ?>
                        <?php case null: ?>
                            <p>食いつき error</p>
                            <?php break; ?>
                        <default :>
                            <p>食いつき error</p>
                        <?php endswitch;?>

                        <?php
                        switch ($size):
                            case 1:
                        ?>
                        <p>粒の大きさ ★☆☆☆☆</p>
                            <?php break; ?>
                        <?php case 2: ?>
                            <p>粒の大きさ ★★☆☆☆</p>
                            <?php break; ?>
                        <?php case 3: ?>
                            <p>粒の大きさ ★★★☆☆</p>
                            <?php break; ?>
                        <?php case 4: ?>
                            <p>粒の大きさ ★★★★☆</p>
                            <?php break; ?>
                        <?php case 5: ?>
                            <p>粒の大きさ ★★★★★</p>
                            <?php break; ?>
                        <?php case null: ?>
                            <p>粒の大きさ error</p>
                            <?php break; ?>
                        <default :>
                            <p>粒の大きさ error</p>
                        <?php endswitch;?>

                        <?php
                        switch ($price):
                            case 1:
                        ?>
                        <p>値段 ★☆☆☆☆</p>
                            <?php break; ?>
                        <?php case 2: ?>
                            <p>値段 ★★☆☆☆</p>
                            <?php break; ?>
                        <?php case 3: ?>
                            <p>値段 ★★★☆☆</p>
                            <?php break; ?>
                        <?php case 4: ?>
                            <p>値段 ★★★★☆</p>
                            <?php break; ?>
                        <?php case 5: ?>
                            <p>値段 ★★★★★</p>
                            <?php break; ?>
                        <?php case null: ?>
                            <p>値段 error</p>
                            <?php break; ?>
                        <default :>
                            <p>値段 error</p>
                        <?php endswitch;?>
                        
                        
                        <p> [価格] <?php echo $price_range; ?>円</p>
                        
                    </div>
                </div>
            </div>
        </main>       
        <?php include("layouts/footer.php"); ?>
    </div>
</body>
</html>
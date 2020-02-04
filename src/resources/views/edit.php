<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("layouts/meta.php"); ?>
</head>
<body>
    <div id="wrapper"> 
    <?php include("layouts/header.php"); ?>
<main style="padding-bottom:20px;">
    <div>
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>

            <form method="POST" action=<?php echo "/update/".$post["id"];?>>
                <input type="hidden" name="_token" value="CNqkpyCybYGpxQUKn5aJxaSEOB1QVEAAgdASk1TK">                <input type="hidden" name="_method" value="PUT">
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            food名<span class="text-danger">*必須</span>
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control "
                            value="<?php echo $post["title"] ?>"
                            type="text"
                            required = "required"
                        >
                                            </div>
                    <div class="form-group">
                        <label for="name">
                            投稿者
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control"
                            value="<?php echo $post["name"]; ?>"
                            type="text"
                        >
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control "
                            rows="10"
                        ><?php echo $post["body"]; ?></textarea>
                     </div>
                        <div class="form-group">
                            <label for="appetite">
                                食いつき:(悪い)← 1  2  3  4  5 →(良い)
                             </label>
                                                
                             <div class="col-xs-3">
                             <select class="form-control" id="evaluation_one" name="evaluation_one">
                                <option <?php echo $post["appetite"] == "1" ? "selected" : ""?>>1</option>
                                <option <?php echo $post["appetite"] == "2" ? "selected" : ""?>>2</option>
                                <option <?php echo $post["appetite"] == "3" ? "selected" : ""?>>3</option>
                                <option <?php echo $post["appetite"] == "4" ? "selected" : ""?>>4</option>
                                <option <?php echo $post["appetite"] == "5" ? "selected" : ""?>>5</option>

                             </select>
                             </div>  
                        </div>  
                        <div class="form-group">
                            <label for="size">
                                  粒の大きさ:(小さい)← 1  2  3  4  5 →(大きい)
                            </label>
                            <div class="col-xs-3">
                            <select class="form-control" id="evaluation_two" name="evaluation_two">
                                <option <?php echo $post["size"] == "1" ? "selected" : ""?>>1</option>
                                <option <?php echo $post["size"] == "2" ? "selected" : ""?>>2</option>
                                <option <?php echo $post["size"] == "3" ? "selected" : ""?>>3</option>
                                <option <?php echo $post["size"] == "4" ? "selected" : ""?>>4</option>
                                <option <?php echo $post["size"] == "5" ? "selected" : ""?>>5</option>
                            </select>
                            </div>  
                        </div>   
                        <div class="form-group">
                            <label for="price">
                                  値段:(安い)← 1  2  3  4  5 →(高い)
                            </label>
                            <div class="col-xs-3">
                            <select class="form-control" id="evaluation_three" name="evaluation_three">
                                <option <?php echo $post["price"] == "1" ? "selected" : ""?>>1</option>
                                <option <?php echo $post["price"] == "2" ? "selected" : ""?>>2</option>
                                <option <?php echo $post["price"] == "3" ? "selected" : ""?>>3</option>
                                <option <?php echo $post["price"] == "4" ? "selected" : ""?>>4</option>
                                <option <?php echo $post["price"] == "5" ? "selected" : ""?>>5</option>
                            </select>
                            </div>  
                        </div> 
                        <div class="form-group">
                            <label for="evaluation_four">
                            価格(円)(数字のみ)<span class="text-danger">*必須</span>
                        </label>
                        <input
                            id="evaluation_four"
                            name="evaluation_four"
                            class="form-control "
                            value="<?php echo $post["price_range"]; ?>"
                            type="number"
                            required = "required"
                        >
                        
                        </div>           
                        </div>
                    <div class="mt-5">

                        <button type="submit" class="btn btn-primary">
                            更新する
                        </button>

                        

                        <a class="btn btn-secondary" href=<?php echo "/show/".$post["id"];?>>
                            キャンセル
                        </a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
    </main>       
    <?php include("layouts/footer.php"); ?>
    </div>
</body>
</html>
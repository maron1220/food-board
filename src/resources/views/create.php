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

                        <form method="POST" action="/store">
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
                                        value=""
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
                                        value=""
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
                                    >
                                    </textarea>
                                                        </div>
                                <div class="form-group">
                                    <label for="appetite">
                                    食いつき:(悪い)← 1  2  3  4  5 →(良い)
                                    </label>
                                    
                                    <div class="col-xs-3">
                                        <select class="form-control" id="evaluation_one" name="evaluation_one">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>  
                                <div class="form-group">
                                    <label for="size">
                                    粒の大きさ:(小さい)← 1  2  3  4  5 →(大きい)
                                    </label>
                                    <div class="col-xs-3">
                                        <select class="form-control" id="evaluation_two" name="evaluation_two">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                     </div>  
                                <div class="form-group">
                                    <label for="price">
                                    値段:(安い)← 1  2  3  4  5 →(高い)
                                    </label>
                                    <div class="col-xs-3">
                                        <select class="form-control" id="evaluation_three" name="evaluation_three">
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>  
                                        
                                    <div class="col-xs-3">
                                    <!-- <select class="form-control" id="evaluation_three" name="evaluation_three">
                                            <option value="1" selected="selected">999円以下</option>
                                            <option value="2">1,000~1,500円</option>
                                            <option value="3">1,500~2,000円</option>
                                            <option value="4">2,001~2,500円</option>
                                            <option value="5">2,501~3,000円</option>
                                        </select> -->
                                    <div class="form-group">
                            <label for="evaluation_four">
                            価格(円)(数字のみ)<span class="text-danger">*必須</span>
                        </label>
                        <input
                            id="evaluation_four"
                            name="evaluation_four"
                            class="form-control "
                            value=""
                            type="number"
                            required = "required"
                        >
                        
                        </div>                
                                     </div>
                                </div>  
                                <div class="mt-5">
                                    <a class="btn btn-secondary" href="/">
                                        キャンセル
                                    </a>

                                    <button type="submit" class="btn btn-primary" >
                                        投稿する
                                    </button>
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
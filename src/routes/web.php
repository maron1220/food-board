<?php
    $url_text = $_GET["url"]; 
    $params = explode("/",$url_text); //ドキュメントルート以降のurlを取得

    $webroot = $_SERVER["DOCUMENT_ROOT"]; //apatchのドキュメントルートを読み込む
    $views = $webroot."/../resources/views";
    $models = $webroot."/../app";
    
    
    include($webroot."/../app/Http/Controllers/PostsController.php");
    $postController = new PostController($models,$views);

    switch ($params[0]){
        case "":
            $postController->index();
            break;
        case "create":
            $postController->create();
            break;
        case "store":
            $postController->store();
            break;
        case "show":
            $postController->show($params[1]);//記事番号(id)を渡している
            break;
        case "edit":
            $postController->edit($params[1]);
            
            break;
        case "update":
            $postController->update($params[1]);
            break;
        case "destroy":
            $postController->destroy($params[1]);
            break;

    }
?>






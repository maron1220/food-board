<?php

class Post{
    //プロパティの設定
    private $DB_HOST = "192.168.33.10";
    private $DB_NAME = "pet_food";
    private $DB_USER = "root";
    private $DB_PASSWORD = "Tapio2020@";

    //接続するデータベースの情報
    protected function db_access(){
        //エラーが出たときに表示させる
        error_reporting(E_ALL & ~E_NOTICE);

        //データベースへの接続
        try {
            //PDPはPHP公式のクラス
            $dbh = new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);
            return $dbh;//returnで返り値を取得して外部で使用できるようにする
        } catch (PDOException $e) {
            echo "エラー!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //データベースの中身を配列として取り出す
    public function index(){
        $dbh = $this->db_access();
        $sql = "SELECT * FROM posts";
        $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //データベースに情報を新規作成
    public function store(){
        $dbh = $this->db_access();
        try{
            $dbh->beginTransaction();//データの保存途中でエラーが起きたら最初に戻す


        $sql = "INSERT INTO posts(title,name,body,appetite,size,price,price_range)VALUES(:title,:name,:body,:appetite,:size,:price,:price_range)";//:titleで仮置をしなきゃいけない(プレースホルダー)
        $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している

        $stmt->bindValue(":title",$_POST["title"],PDO::PARAM_STR);//プレースホルダーの実行､create.phpでのidを取得している
        $stmt->bindValue(":name",$_POST["name"],PDO::PARAM_STR);
        $stmt->bindValue(":body",$_POST["body"],PDO::PARAM_STR);
        $stmt->bindValue(":appetite",$_POST["evaluation_one"],PDO::PARAM_INT);
        $stmt->bindValue(":size",$_POST["evaluation_two"],PDO::PARAM_INT);
        $stmt->bindValue(":price",$_POST["evaluation_three"],PDO::PARAM_INT);
        $stmt->bindValue(":price_range",$_POST["evaluation_four"],PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $dbh->commit();//Transactionの終わり
        }catch(PDOException $Exception){
            $dbh->rollBack();
        }
        

        return "ok";
    }

    //showのidを受け取る
    public function show($post_id){
        
        $dbh = $this->db_access();//dbにアクセス

        $sql = "SELECT * FROM posts WHERE id = :id";//:idはプレースホルダ
        $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している
        $stmt->bindValue(":id",$post_id,PDO::PARAM_INT);//今回は型がINT
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);//データを取り出す
       

        return $result;
    }
    
    public function edit($post_id){
        
        $dbh = $this->db_access();//dbにアクセス

        $sql = "SELECT * FROM posts WHERE id = :id";//:idはプレースホルダ
        $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している
        $stmt->bindValue(":id",$post_id,PDO::PARAM_INT);//今回は型がINT
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);//データを取り出す
       
        
        return $result;
    }

    // public function store(){
    //     $dbh = $this->db_access();
    //     try{
    //         $dbh->beginTransaction();//データの保存途中でエラーが起きたら最初に戻す


    //     $sql = "INSERT INTO posts(title,name,body,appetite,size,price)VALUES(:title,:name,:body,:appetite,:size,:price)";//:titleで仮置をしなきゃいけない(プレースホルダー)
    //     $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している

    //     $stmt->bindValue(":title",$_POST["title"],PDO::PARAM_STR);//プレースホルダーの実行､create.phpでのidを取得している
    //     $stmt->bindValue(":name",$_POST["name"],PDO::PARAM_STR);
    //     $stmt->bindValue(":body",$_POST["body"],PDO::PARAM_STR);
    //     $stmt->bindValue(":appetite",$_POST["evaluation_one"],PDO::PARAM_STR);
    //     $stmt->bindValue(":size",$_POST["evaluation_two"],PDO::PARAM_STR);
    //     $stmt->bindValue(":price",$_POST["evaluation_three"],PDO::PARAM_STR);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     $dbh->commit();//Transactionの終わり
    //     }catch(PDOException $Exception){
    //         $dbh->rollBack();
    //     }
        

    //     return "ok";
    // }

    public function update($post_id){
        $dbh = $this->db_access();
        try{
            $dbh->beginTransaction();//データの保存途中でエラーが起きたら最初に戻す

            $sql = "UPDATE posts SET title = :title , name = :name , body = :body , appetite = :appetite , size = :size , price = :price , price_range = :price_range WHERE id = :id";//:titleで仮置をしなきゃいけない(プレースホルダー)
            $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している

            $stmt->bindValue(":title",$_POST["title"],PDO::PARAM_STR);//プレースホルダーの実行､create.phpでのidを取得している
            $stmt->bindValue(":name",$_POST["name"],PDO::PARAM_STR);
            $stmt->bindValue(":body",$_POST["body"],PDO::PARAM_STR);
            $stmt->bindValue(":appetite",$_POST["evaluation_one"],PDO::PARAM_INT);
            $stmt->bindValue(":size",$_POST["evaluation_two"],PDO::PARAM_INT);
            $stmt->bindValue(":price",$_POST["evaluation_three"],PDO::PARAM_INT);
            $stmt->bindValue(":price_range",$_POST["evaluation_four"],PDO::PARAM_INT);
            $stmt->bindValue(":id",$post_id,PDO::PARAM_INT);
            $stmt->execute();

        $dbh->commit();//Transactionの終わり
        }catch(PDOException $Exception){
            $dbh->rollBack();
        }

        return "ok";
    }

    public function destroy($post_id){
        
        $dbh = $this->db_access();//dbにアクセス

        $sql = "DELETE from posts WHERE id = :id";//:idはプレースホルダ
        $stmt = $dbh->prepare($sql);//PDOの中にprerareが存在している
        $stmt->bindValue(":id",$post_id,PDO::PARAM_INT);//今回は型がINT
        $stmt->execute();//executeは実行
        
        return "ok";
    }


}

?>
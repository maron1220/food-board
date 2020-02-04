<?php 
class PostController
{
    public function __construct($models,$views){
        $this->models = $models;
        $this->views = $views;
    }

    public function index(){
        include($this->models."/Post.php");
        $postmodel = new Post;
        $result = $postmodel->index();
        

        $posts = $result;//view側でpostという形で使う
        
        include($this->views."/index.php");
    }

    public function create(){
        include($this->views."/create.php");
        
    }

    public function store(){
        
        include($this->models."/Post.php");
        $postmodel = new Post;

        $result = $postmodel->store();
        
        header("Location:http://192.168.33.10");

        
    }

    public function edit($post_id){

        include($this->models."/Post.php");
        $postmodel = new Post;
        $result = $postmodel->edit($post_id);//modelのshowにidを渡す

        $post = $result[0];
        
        
        include($this->views."/edit.php");
    }

    //渡されたidを受け取る($post_idという名前で)
    public function show($post_id){
        
        include($this->models."/Post.php");
        $postmodel = new Post;
        $result = $postmodel->show($post_id);//modelのshowにidを渡す

        $post = $result[0];
        
        include($this->views."/show.php");
    }

    public function update($post_id){
        
        include($this->models."/Post.php");
        
        $postmodel = new Post;
        
        $result = $postmodel->update($post_id);
        
        header("Location:http://192.168.33.10");

        
    }

    public function destroy($post_id){
        
        include($this->models."/Post.php");
        $postmodel = new Post;
        $result = $postmodel->destroy($post_id);
        
        header("Location:http://192.168.33.10");

        
    }


}

?>
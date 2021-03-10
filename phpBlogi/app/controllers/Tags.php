<?php 
    class Tags extends Controller{
        public function __construct()
        {
            $this->tagsModel = $this->model('Tag');
            $this->postsModel = $this->model('Post');
        }
        // tag list
        public function index(){
            $tags = $this->tagsModel->getTags();
            $data = array(
                'tags' => $tags
            );
            $this->view('tags/index', $data);
        }
        // tag kategooria sisu
        public function show($id){
            $post = $this-> postsModel ->getPosts();
            $tags = $this -> tagsModel -> getTagPosts($id);
            $data = array(
                'tags' => $tags,
                'post' => $post
            );
            $this->view('tags/show', $data);
        }
    }

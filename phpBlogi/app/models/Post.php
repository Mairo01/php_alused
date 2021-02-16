<?php


class Post
{
    private $db;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getPosts(){
        $this->db->query('
            SELECT *,
            posts.id as postId,
            user.id as userId,
            posts.created_at as postCreated
            FROM posts
            INNER JOIN users
            ON posts.user_id = users.id
            ORDER BY posts.created_at DESC
        ');
        $result = $this->db->getAll();
        return $result;
    }
    public function getPostById($id){ #andmete kysimine???
        $this->db->query('SELECT * FROM posts WHERE ID=:id');
        $this->db->bind(':id', $id);
        $post = $this->db->getOne(); #ainult yks postitus
        return $post;
    }
    public  function deletePost($id){ #post del
        $this->db->query('DELETE FROM posts WHERE id=:id');
        $this->db->bind(':id', $id);
        $result = $this->db->execute();
        if($result){return true;}else{return false;}
    }
    public function editPost($data){
        $this->db->query('UPDATE posts SET title=:title, content=:content WHERE id=:id');
        $this->db->bind(':id', $id);
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $result = $this->db->execute();
        if($result){return true;}else{return false;}
    }
    public function addPost($data){
        $this->db->query('UPDATE posts SET title=:title, content=:content WHERE id=:id');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':content', $data['content']);

        $result = $this->db->execute();
        if($result){return true;}else{return false;}
    }
}
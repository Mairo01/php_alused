<?php 

class Tag{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    //tag list
    public function getTags()
    {
        $this->db->query('SELECT * FROM tags');
        $result = $this->db->getAll();
        return $result;
    }
    //tag postituses
    public function getPostTags($id)
    { 
        $this->db->query('
                    SELECT * FROM tags 
                    INNER JOIN post_tags 
                    ON post_tags.tag_id=tags.id 
                    WHERE post_tags.post_id = :id '
        );
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
        
    }
    //tagis postitused
    public function getTagPosts($id)
    {
        $this->db->query('
            SELECT * FROM posts 
            INNER JOIN post_tags 
            ON post_tags.post_id=posts.id 
            WHERE post_tags.tag_id = :id
        '
        );
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
    }
}

?>
<?php


class Post
{
    private $conn;
    private $table = 'posts';

    //Post properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    //constructor with db
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Get Posts
    public function read()
    {
        //Create query
        $query = 'SELECT
                    c.name as category_name,
                    p.id,
                    p.category_id,
                    p.title,
                    p.author,
                    p.created_at
                   FROM
                    ' . $this->table . ' p
                   LEFT JOIN
                    categories c ON
                    p.category_id = c.id
                   ORDER BY
                    p.created_at DESC';

        //Prepared statements
        $stmt = $this->conn->prepare($query);

        //Exwcute query
        $stmt->execute();

        return $stmt;
    }
}

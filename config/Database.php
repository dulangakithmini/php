<?php


class Database
{
    //DB parameters
    private $host = "localhost";
    private $db_name = "myblog";
    private $username = "root";
    private $password = "";
    private $conn;

    //DB connection
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql: host " . $this->host . ";dbname" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection Error: " . $exception->getMessage();
        }
    }
}

<?php

class CRUD

{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'tisoley';
    public $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }

    public function create($data)
    {

        $query = "INSERT INTO pizza (title, picture, base , description , price ) VALUES (:title , :picture , :base , :description , :price)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':title', $data['title']);
        $statement->bindParam(':picture', $data['picture']);
        $statement->bindParam(':base', $data['base']);
        $statement->bindParam(':description', $data['description']);
        $statement->bindParam(':price', $data['price']);


        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function read()

    {
        $query = "SELECT * FROM pizza";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    // ID + DATA
    public function update($id, $data)
    {
        $query = "UPDATE pizza SET title = :title , picture = :picture, base = :base , description = :description , price = :price WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $data['title']);
        $statement->bindParam(':picture', $data['picture']);
        $statement->bindParam(':base', $data['base']);
        $statement->bindParam(':description', $data['description']);
        $statement->bindParam(':price', $data['price']);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getPizzaById($id)
    {
        $query = "SELECT * FROM pizza WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $pizza = $statement->fetch(PDO::FETCH_OBJ);

        return $pizza;
    }


    public function delete($id)
    {
        $query = "DELETE FROM pizza WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

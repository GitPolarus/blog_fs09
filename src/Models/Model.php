<?php
namespace App\Models;

use PDO;

abstract class Model
{
    protected int $id;
    protected string $table;
    protected string $creationDate;

    protected PDO $connexion;

    public abstract function create();
    public abstract function update();
    public function delete()
    {
        $sql = "delete from " . $this->table . " where id = :id";
        $stmt = $this->connexion->prepare($sql);
        return $stmt->execute(["id" => $this->id]);
    }

    public function getAll()
    {
        $sql = "select * from " . $this->table;
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id 
     * 
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}
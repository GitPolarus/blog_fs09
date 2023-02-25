<?php
namespace App\Models;

abstract class Model
{
    protected int $id;
    protected string $table;
    protected string $creationDate;

    protected \PDO $connexion;

    public abstract function create();
    public abstract function update();
    public abstract function delete();

}
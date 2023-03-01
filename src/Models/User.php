<?php
namespace App\Models;

use App\Helpers\Connexion;
use PDO;

class User extends Model
{
    private string $name;
    private string $email;
    private string $pass;
    private ?string $photo;
    private bool $activated;
    private string $role;




    public function __construct()
    {
        $this->table = "users";
        $this->connexion = Connexion::getConnexion();
    }



    /**
     * @return mixed
     */
    public function create()
    {
        $sql = "insert into " . $this->table . " (name, email, password, photo, role, activated) values (:name, :email, :password, :photo, :role, :activated)";

        // echo $sql;
        $params = [
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->pass,
            "photo" => $this->photo,
            "role" => $this->role,
            "activated" => $this->activated,
        ];
        $stmt = $this->connexion->prepare($sql);

        if ($stmt->execute($params)) {
            $_SESSION["success"] = "User Account created successfully";
            return true;
        } else {
            $_SESSION["error"] = "User Account creation failed";
            return false;
        }

    }

    public function login($email, $pass)
    {

        $sql = "select * from " . $this->table . " where email=:email";

        // echo $sql;
        $params = [
            "email" => $email,
        ];
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($pass, $user["password"])) {
                $_SESSION["user"] = $user;
                return true;
            } else {
                $_SESSION["error"] = "Wrong Password";
                return false;
            }
        } else {
            $_SESSION["error"] = "Email not existing";
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function update()
    {
    }

    /**
     * @return mixed
     */
    public function delete()
    {
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role 
     * 
     */
    public function setRole(string $role)
    {
        $this->role = $role;

    }

    /**
     * @return bool
     */
    public function getActivated(): bool
    {
        return $this->activated;
    }

    /**
     * @param bool $activated 
     * 
     */
    public function setActivated(bool $activated)
    {
        $this->activated = $activated;

    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo 
     * 
     */
    public function setPhoto(?string $photo)
    {
        $this->photo = $photo;

    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass 
     * 
     */
    public function setPass(string $pass)
    {
        $this->pass = password_hash($pass, PASSWORD_BCRYPT);

    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email 
     * 
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = ucwords($name);
    }
}
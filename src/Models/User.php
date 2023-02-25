<?php
namespace App\Models;

use App\Helpers\Connexion;

class User extends Model
{
    private string $name;
    private string $email;
    private string $pass;
    private string $photo;
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
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
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
     * @return self
     */
    public function setActivated(bool $activated): self
    {
        $this->activated = $activated;
        return $this;
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
     * @return self
     */
    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;
        return $this;
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
     * @return self
     */
    public function setPass(string $pass): self
    {
        $this->pass = $pass;
        return $this;
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
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
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
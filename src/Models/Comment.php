<?php
namespace App\Models;

use App\Helpers\Connexion;

class Comment extends Model
{

    private string $message;
    private string $creationDate;
    private bool $approved;
    private int $author_id;
    private int $post_id;



    public function __construct()
    {
        $this->table = "comments";
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
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message 
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate 
     */
    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return bool
     */
    public function getApproved(): bool
    {
        return $this->approved;
    }

    /**
     * @param bool $approved 
     * @return self
     */
    public function setApproved(bool $approved): self
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthor_id(): int
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id 
     * @return self
     */
    public function setAuthor_id(int $author_id): self
    {
        $this->author_id = $author_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPost_id(): int
    {
        return $this->post_id;
    }

    /**
     * @param int $post_id 
     * @return self
     */
    public function setPost_id(int $post_id): self
    {
        $this->post_id = $post_id;
        return $this;
    }


}
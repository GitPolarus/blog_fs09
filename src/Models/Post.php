<?php
namespace App\Models;

use App\Helpers\Connexion;

class Post extends Model
{
    private string $title;
    private string $content;
    private bool $published;
    private string $photo;


    public function __construct()
    {
        $this->table = "posts";
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title 
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content 
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published 
     * @return self
     */
    public function setPublished(bool $published): self
    {
        $this->published = $published;
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
}
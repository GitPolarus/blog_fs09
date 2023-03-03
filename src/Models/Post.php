<?php
namespace App\Models;

use App\Helpers\Connexion;
use PDO;

class Post extends Model
{
    private string $title;
    private string $content;
    private bool $published;
    private ?string $photo;

    private string $publishDate;
    private int $authorId;


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
        $sql = "Insert into " . $this->table . " (title, content, photo, published, publish_date, author_id) values(:title, :content, :photo, :published, :publish_date, :author_id)";
        $params = [
            "title" => $this->title,
            "content" => $this->content,
            "photo" => $this->photo,
            "published" => $this->published,
            "publish_date" => $this->publishDate,
            "author_id" => $this->authorId
        ];
        $stmt = $this->connexion->prepare($sql);
        if ($stmt->execute($params)) {
            $_SESSION["success"] = "Post Created successfully";
            return true;
        } else {
            $_SESSION["error"] = "Post Creation failed";
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function update()
    {
    }



    public function getAll()
    {
        $sql = "select u.name AS author, p.* from users u, posts p where p.author_id = u.id ";
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
     * 
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

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
     * 
     */
    public function setContent(string $content)
    {
        $this->content = $content;

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
     * 
     */
    public function setPublished(bool $published)
    {
        $this->published = $published;

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
    public function getPublishDate(): string
    {
        return $this->publishDate;
    }

    /**
     * @param string $publishDate 
     * 
     */
    public function setPublishDate(string $publishDate)
    {
        $this->publishDate = $publishDate;

    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId 
     * 
     */
    public function setAuthorId(int $authorId)
    {
        $this->authorId = $authorId;

    }
}
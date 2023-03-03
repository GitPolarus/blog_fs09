<?php
namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\Post;

class AdminController extends Controller
{


    public function __construct()
    {
        if (!isset($_SESSION["user"])) {
            header("location:/blog_fs09/user/loginview");
        } else {
            if ($_SESSION["user"]["role"] != "Admin") {
                header("location:/blog_fs09/");
            }
        }
    }

    /**
     * @return mixed
     */
    public function index()
    {
        require_once("Views/admin/home.php");
    }


    // Posts Management
    public function addpostview()
    {
        require_once("Views/admin/postform.php");
    }

    public function addpost()
    {
        $post = new Post();
        $post->setTitle(Helper::getInputValue("title"));
        $post->setContent(Helper::getInputValue("content"));
        $post->setPhoto(Helper::uploadFile("photo"));
        $post->setPublished(true);
        $post->setPublishDate(date("Y/m/d", time()));
        $post->setAuthorId($_SESSION["user"]["id"]);

        if (!isset($_SESSION["errors"])) {
            $post->create();
            header("location:/blog_fs09/admin/postlistview");
        } else {
            header("location:/blog_fs09/admin/addpostview");
        }

    }

    public function postlistview()
    {
        $post = new Post();
        $posts = $post->getAll();
        require_once("Views/admin/postlist.php");
    }

    public function deletepost($id)
    {
        $post = new Post();
        $post->setId($id);
        if ($post->delete()) {
            $_SESSION["success"] = "Post Deleted Successfully";
            header("location:/blog_fs09/admin/postlistview");
        } else {
            $_SESSION["error"] = "Post Deletion failed";
            header("location:/blog_fs09/admin/postlistview");
        }
    }
}
<?php
namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\User;

class UserController extends Controller
{

    public function displayUser()
    {
        // Appel du model
        $user = new User();
        $user->setName("ablam hippolyte");

        // appel de la vue
        require_once("Views/user_view.php");
    }
    /**
     * @return mixed
     */
    public function index()
    {
    }

    // register use case
    public function registerview()
    {
        require_once("Views/register.php");
    }

    public function register()
    {


        $user = new User();

        $user->setName(Helper::getInputValue("name"));
        $user->setEmail(Helper::getInputValue("email"));
        $user->setPass(Helper::getInputValue("password"));
        $user->setPhoto(Helper::uploadFile("photo"));
        $user->setRole("Member");
        $user->setActivated(true);
        if ($user->create()) {
            header("location:/blog_fs09/home");
        } else {
            header("location:/blog_fs09/user/registerview");
        }

    }
}
<?php
namespace App\Controllers;

use App\Models\User;

use App\Helpers\Message;
use App\Models\Message as ModelMsg;

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
}
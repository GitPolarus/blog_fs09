<?php
namespace App\Controllers;

session_start();
abstract class Controller
{
    public abstract function index();
    public function logout()
    {
        unset($_SESSION["user"]);
        $_SESSION["success"] = "You Logged Out Successfully";
        header("location:/blog_fs09/user/loginview");
    }
}
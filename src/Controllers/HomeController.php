<?php
namespace App\Controllers;

class HomeController extends Controller
{


    /**
     * @return mixed
     */
    public function index()
    {
        require_once("Views/home_view.php");
    }
}
<?php
namespace App\Controllers;

session_start();
abstract class Controller
{
    public abstract function index();
}
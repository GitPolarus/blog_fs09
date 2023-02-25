<?php
namespace App\Models;

class Message
{
    public string $content;
    public function __construct()
    {
        echo ("model Message");
    }
}
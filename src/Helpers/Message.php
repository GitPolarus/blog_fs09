<?php
namespace App\Helpers;

class Message
{
    public string $type;
    public string $content;

    public function __construct()
    {
        echo ("Helpers Message");
    }
}
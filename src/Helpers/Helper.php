<?php
namespace App\Helpers;

class Helper
{
    public static $errors = [];
    public static function uploadFile($formName, $required = false)
    {

        if (!file_exists("uploads")) {
            mkdir("uploads");
        }

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$formName]["name"]);

        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        if (move_uploaded_file($_FILES[$formName]["tmp_name"], $target_file)) {
            // array_push(self::$errors, "Your file has been uploaded Successfully.");
            // $_SESSION["success"] = self::$errors;
            return $target_file;
        } else {
            if ($required) {
                array_push(self::$errors, "Sorry, there was an error uploading your file.");
                $_SESSION["errors"] = self::$errors;
            }
            return null;
        }

    }

    public static function getInputValue($inputName, $required = true)
    {


        if (empty(trim($_REQUEST[$inputName]))) {
            if ($required) {
                array_push(self::$errors, "$inputName is empty");
                $_SESSION["errors"] = self::$errors;

            }

            return "";
        }
        return htmlspecialchars($_REQUEST[$inputName]);
    }
}
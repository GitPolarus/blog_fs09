<?php
namespace App\Helpers;

class Helper
{

    public static function uploadFile($formName)
    {
        $errors = [];

        if (!file_exists("uploads")) {
            mkdir("uploads");
        }

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$formName]["name"]);

        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        if (move_uploaded_file($_FILES[$formName]["tmp_name"], $target_file)) {
            array_push($errors, "Your file has been uploaded Successfully.");
            $_SESSION["errors"] = $errors;
            return $target_file;
        } else {
            array_push($errors, "Sorry, there was an error uploading your file.");
            $_SESSION["errors"] = $errors;
            return null;
        }

    }

    public static function getInputValue($inputName, $required = true)
    {
        $errors = [];
        if (empty(trim($_REQUEST[$inputName]))) {
            if ($required) {
                array_push($errors, "$inputName is empty");
                $_SESSION["errors"] = $errors;
            }

            return null;
        }
        return htmlspecialchars($_REQUEST[$inputName]);
    }
}
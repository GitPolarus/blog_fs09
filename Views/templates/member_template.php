<?php
session_start();
require_once("Views/partials/header.php");
?>
<div class="container">
    <?php if (isset($_SESSION["errors"])): ?>
        <ul class="alert alert-danger ">
            <?php foreach ($_SESSION["errors"] as $error): ?>
                <li>
                    <?= $error ?>
                </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION["error"] ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION["success"])): ?>
        <div class="alert alert-success ">
            <?= $_SESSION["success"] ?>
        </div>
    <?php endif; ?>

    <?= $contents ?>
</div>
<?php
require_once("Views/partials/footer.php");
unset($_SESSION["success"]);
unset($_SESSION["error"]);
unset($_SESSION["errors"]);
?>
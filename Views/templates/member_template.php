<?php
require_once("Views/partials/header.php");
include("Views/partials/nav.php");
?>
<div class="container">
    <?php if (isset($_SESSION["errors"])): ?>
        <ul class="alert alert-danger text-center ">
            <?php foreach ($_SESSION["errors"] as $error): ?>
                <li class="list-unstyled">
                    <?= $error ?>
                </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="alert alert-danger text-center ">
            <?= $_SESSION["error"] ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION["success"])): ?>
        <div class="alert alert-success text-center ">
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
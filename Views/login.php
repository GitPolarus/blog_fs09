<?php
$title = "Login";
ob_start();
?>
<main class="form-signin w-50 m-auto text-center mt-3">
    <form method="post" action="/blog_fs09/user/login" enctype="multipart/form-data">

        <h1 class="h3 mb-3 fw-normal">Sign In</h1>

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Login</button>

    </form>
</main>
<?php
$contents = ob_get_clean();
require_once("Views/templates/member_template.php");
?>
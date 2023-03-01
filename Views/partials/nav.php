<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="/blog_fs09/">Blog FS-09</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/blog_fs09/">Home</a>
                </li>

                <?php if (isset($_SESSION["user"])): ?>
                    <li class="nav-item d-flex align-items-center">
                        <h6 class="pt-2 px-2">
                            <?= $_SESSION["user"]["name"] ?>
                        </h6>
                        <a class=" nav-link text-white btn btn-sm btn-danger" href="/blog_fs09/user/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog_fs09/user/loginview">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog_fs09/user/registerview">Register</a>
                    </li>
                <?php endif; ?>


            </ul>

        </div>
    </div>
</nav>
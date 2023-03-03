<?php
$title = "Admin Posts";
ob_start();
?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/blog_fs09/admin/addpostview" class="btn btn-sm btn-outline-secondary">Add Post</a>

            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-calendar align-text-bottom" aria-hidden="true">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            This week
        </button>
    </div>
</div>
<h2>Post List</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col">Published</th>
                <th scope="col">Author</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $p): ?>
                <tr>
                    <td>
                        <?= $p["id"] ?>
                    </td>
                    <td>
                        <?= $p["title"] ?>
                    </td>
                    <td>
                        <?= $p["content"] ?>
                    </td>
                    <td><img src="/blog_fs09/<?= $p['photo'] ?>" alt=<?= $p['title'] ?> width="100px" height="" /></td>
                    <td>
                        <?= $p["published"] ? "Published" : "Unpublished" ?>
                    </td>
                    <td>
                        <?= $p["author"] ?>
                    </td>

                    <td>
                        <a href="#" class="btn btn-info" title="Edit">Edit</a>
                        <a href="/blog_fs09/admin/deletepost/<?= $p["id"] ?>" class="btn btn-danger"
                            title="Delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>



</div>

<?php
$contents = ob_get_clean();
require_once("Views/templates/admin_template.php");
?>
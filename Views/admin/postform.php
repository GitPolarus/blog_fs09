<?php
$title = "Admin Posts";
ob_start();
?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Management</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/blog_fs09/admin/postlistview" class="btn btn-sm btn-outline-secondary">List Posts</a>
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
<h2>New Post</h2>
<div class="table-responsive">
    <form action="/blog_fs09/admin/addpost" method="Post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title">
            <label for="name">Title</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="content" class="form-control" id="content" placeholder="Enter your post description"
                rows="15"></textarea>
            <label for="content">Content</label>
        </div>

        <div class="form-floating mb-3">
            <input type="file" name="photo" class="form-control" id="floatingPhoto" placeholder="Photo"
                accept="image/*">
            <label for="floatingPhoto">Photo</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Save</button>
    </form>


</div>

<?php
$contents = ob_get_clean();
require_once("Views/templates/admin_template.php");
?>
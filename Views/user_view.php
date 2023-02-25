<?php
$title = "User";
ob_start();
?>
<h1> USER PAGE </h1>
<?php
$contents = ob_get_clean();
require_once("Views/templates/member_template.php");
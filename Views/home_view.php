<?php
$title = "Home";
ob_start();
?>
<h2>Home</h2>
<?php
$contents = ob_get_clean();
require_once("Views/templates/member_template.php");
?>
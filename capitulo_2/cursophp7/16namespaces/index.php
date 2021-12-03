<?php
//nos permite tener los mismos nombres en un mismo sitio.
require "Admin/blog.php";
require "blog.php";

use Admin\blog as AdminBlog;

$admindBlog = new AdminBlog();
echo "<br>";
$blog = new blog;

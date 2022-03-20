<?php
require_once("db.php");
// Update category
if (isset($_GET['DelID'])) {
    $db = new DB();
    $db->delete("category",$_GET['DelID']);
    header("location:index.php");
} else {
    header("location:index.php"); // if not requst redirct to index.php
}
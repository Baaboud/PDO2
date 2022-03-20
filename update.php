<?php
require_once("db.php");
// Update category
if (isset($_POST)) {
    $db = new DB();
    $db->update("category",$_POST,$_GET['ID']);
    header("location:index.php");
} else {
    header("location:index.php"); // if not requst redirct to index.php
}
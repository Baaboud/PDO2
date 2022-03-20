<?php
require_once("db.php");
// This  insert for products 

if (isset($_POST)) {
    $db = new DB();
    $db->insert("category",$_POST);
    header("location:index.php"); // if not requst redirct to index.php
} else {
    header("location:index.php"); // if not requst redirct to index.php
}

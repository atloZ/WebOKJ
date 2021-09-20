<?php


if (isset($_GET["url"])) {
    // $url = explode('/', $_GET["url"]);
    // var_dump($url);
    if ($_GET["url"] == "api/get/user") {
        include("database_class.php");
        $user->db_select();
        var_dump($user->row);
    }
}



// include("database_class.php");
// $user = new adatbazis();
// $user->db_select();
// // $user->db_insert("Tamas", "12345");
// // $user->db_delete(4);
// // $user->db_update(1,"Tamas", "12345");

// var_dump($user->row);
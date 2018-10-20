<?php
/**
 * This is the main API interface. AJAX will communicate with this file mostly.
 */
require_once ("config.php");
require_once ("database.php");

$action = isset($_POST["action"]) ? $_POST["action"] : "";

switch ($action){

    case "GET_LEFT":
        $database = new Database();
        $lang = isset($_POST["lang"]) ? $_POST["lang"] : "";
        echo json_encode($database->get_left($lang));
        die();
        break;

    case "GET_HOME_DATA":
      $database = new Database();
      echo json_encode($database->get_home_data());
      die();
      break;

    case "GET_ARCHIVE_DATA":
      $database = new Database();
      echo json_encode($database->get_archive_data());
      die();
      break;

}

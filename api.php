<?php
/**
 * This is the main API interface. AJAX will communicate with this file mostly.
 */

require_once ("includes.php");

$action = isset($_POST["action"]) ? $_POST["action"] : "";

switch ($action){

    case "GET_LEFT":
        $database = new Database();
        $lang = isset($_POST["lang"]) ? $_POST["lang"] : "";
        echo json_encode($database->get_left($lang));
        die();
        break;

}

<?php


class Database{
    var $dbh;

    function __construct()
    {
        try
        {
            /** Please refer to config.php for the values of DB_HOST, DB_NAME, DB_USERNAME and DB_PASSWORD */
            $this->dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, array(
                PDO::ATTR_PERSISTENT => true
            ));
        } catch (PDOException $e) {
            echo "Database connection failed";
            die();
        }
    }

    function get_left($lang){
      try{
        $returnData = array();
        $stmt = $this->dbh->prepare("SELECT * FROM $lang ORDER BY Status ASC");
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $obj = new stdClass();
            $obj->word = $row["Word"];
            $obj->meaning = $row["Meaning"];
            $obj->status = $row["Status"];
            $obj->timestamp = $row["Timestamp"];
            $returnData[] = $obj;
        }
        return $returnData;
    }catch (PDOException $e){
        echo "get_locations failed.";
        die();
    }
  }

}

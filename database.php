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

  function get_home_data(){
    try{
      $returnData = array();
      $stmt = $this->dbh->prepare("SELECT * FROM scientries ORDER BY id DESC LIMIT 3");
      $stmt->execute();

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $obj = new stdClass();
          $obj->id = $row["id"];
          $obj->category = $row["category"];
          $obj->timestamp = $row["timestamp"];
          $obj->apl_date_begin = $row["apl_date_begin"];
          $obj->apl_date_end = $row["apl_date_end"];
          $obj->apl_geo = $row["apl_geo"];
          $obj->apl_social = $row["apl_social"];
          $obj->quantqual = $row["quantqual"];
          $obj->stat_method = $row["stat_method"];
          $obj->stat_p = $row["stat_p"];
          $obj->stat_median1 = $row["stat_median1"];
          $obj->stat_mode1 = $row["stat_mode1"];
          $obj->stat_mean1 = $row["stat_mean1"];
          $obj->stat_mu1 = $row["stat_mu1"];
          $obj->stat_deviation1 = $row["stat_deviation1"];
          $obj->stat_sigma1 = $row["stat_sigma1"];
          $obj->stat_samplesize1 = $row["stat_samplesize1"];
          $obj->stat_median2 = $row["stat_median2"];
          $obj->stat_mode2 = $row["stat_mode2"];
          $obj->stat_mean2 = $row["stat_mean2"];
          $obj->stat_mu2 = $row["stat_mu2"];
          $obj->stat_deviation2 = $row["stat_deviation2"];
          $obj->stat_sigma2 = $row["stat_sigma2"];
          $obj->stat_samplesize2 = $row["stat_samplesize2"];
          $obj->stat_tvalue = $row["stat_tvalue"];
          $obj->p_hacking = $row["p_hacking"];

          foreach ($obj as $key => $value) {
            if($value == "0"){
              unset($obj->$key);
            }
          }

          $returnData[] = $obj;
      }
      return $returnData;

    }
    catch (PDOException $e){
      echo "get_home_data failed.";
      die();
    }
  }

  function get_archive_data(){
    try{
      $returnData = array();
      $stmt = $this->dbh->prepare("SELECT * FROM scientries");
      $stmt->execute();

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $obj = new stdClass();
          $obj->id = $row["id"];
          $obj->category = $row["category"];
          $returnData[] = $obj;
      }
      return $returnData;
  }catch (PDOException $e){
      echo "get_archive_data failed.";
      die();
  }
}

}

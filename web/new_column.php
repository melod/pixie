<?php
function addColumnIfItDoesNotExist() {
    //this query checks for the new column
    $query = ("SHOW COLUMNS ".
              "FROM fairies".
              "LIKE '%tree_id%'");
    $result = mysql_query($query)  
      or die("select table fairies".
             "in addColumnIfItDoesNotExist() not successful: ".
      mysql_error());
    $rarray = mysql_fetch_array($result);
    if (NULL == $rarray[0]) {
      //here are the specifics for your new column, 
      //  both the datatype and the position in the table
      $query = ("ALTER TABLE fairies ".
                "ADD COLUMN tree_id VARCHAR(100) ".
                "AFTER interests;");
      $result = mysql_query($query) 
        or die("altering table fairies not successful: ".
        mysql_error());      
    }
    return;

?>
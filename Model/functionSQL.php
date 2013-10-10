<?php

function dbConnect() {
  
  /* $conf_file_path=""; */
  /* $conf_file_name="config.ini"; */
  /* $config=parse_ini_file($conf_file_path.'/'.$conf_file_name); */

  $config['host']="localhost";
  $config['user']="root";
  $config['pass']="root";
  $config['dbname']="S2_supercash";

  global $db_connect_id = mysql_connect($config['host'],$config['user'],$config['pass']) 
    or die("Impossible de se connecter à la base");
  
  $change_db = mysql_select_db($config['dbname'],$db_connect_id) or die("Base de données inexistante");                                             
  return $db_connect_id;                                                                           
} 

function dbDisconnect() {
  global $db_connect_id;
  mysql_close($db_connect_id);
}

function dbQuery($query) {
  global $db_connect_id;

  $queryResult=mysql_query($query,$db_connect_id);

  if (mysql_num_rows($queryResult)<1) {
    return false;
  } else {
   
    while ($row=mysql_fetch_assoc($queryResult)){
      $result[]=$row;
    }
    
    return $result;
  }
}

function dbSimpleQuery($query) {
  global $db_connect_id;
  
  $queryResult=mysql_query($query,$db_connect_id);
  
  if($queryResult){
    return true;
  } else {
    return false;
  }
}
              
?>

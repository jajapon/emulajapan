<?php
    if (isset($_ENV['OPENSHIFT_APP_NAME'])) {
      $db_user=$_ENV['OPENSHIFT_MYSQL_DB_USERNAME']; //Openshift db name OPENSHIFT_MYSQL_DB_USERNAME
      $db_host=$_ENV['OPENSHIFT_MYSQL_DB_HOST']; //Openshift db host OPENSHIFT_MYSQL_DB_HOST
      $db_password=$_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']; //Openshift db password OPENSHIFT_MYSQL_DB_PASSWORD
      $db_name="new_animejapan"; //Openshift db name
    } else {
        $db_user='japon'; //my db user
        $db_host='localhost'; //my db host
        $db_password='1234'; //my db password
        $db_name='emulajapan'; //my db name
    }
    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
       //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
         printf("Connection failed: %s\n", $connection->connect_error);
         exit();

    }else{
    }
 ?>

<!DOCTYPE html>
<?php

class DataClass
{
    static $connection;
    public function connect()
    {
        if (!isset(self::$connection)) {
            include("inc_dbConfig.php");
            self::$connection = new mysqli($servername, $username, $password, $dbname);
        }
        if (self::$connection === false) {
            //Handle error -notify administrator, log to a file,show an error screen,etc.
            return false;
        }
        return self::$connection;
    } //end funtion connect

    public function Insert($query)
    {
        //Connect to the database
        $connection = $this->connect();
        //query the database
        $result = $connection->query($query);

        //step4-close connection
        //$this->CloseConnection();
        if (!$result) {
            echo "connection error";
            return $connection->error;
        } else {
            return $result; //return result
        }
    }
    public function error()
    {
        echo "connection error-2";
        //get the last error from the dtabase
        $connection = $this->connect();
        return $connection->error;
    } //end function error


    public function CloseConnection()
    {
        if (isset(self::$connection)) {
            self::$connection->close();
            self::$connection = null;
        }
    } //end function select
}
?>
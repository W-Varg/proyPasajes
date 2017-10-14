<?php


	/**
* Database Configuration
*/
class Connection{

    public function Connection()
     {
      mysql_connect("localhost","root");
      mysql_select_db("venta_pasajes");
     }

    public function insertRecords($data)
    {
        if(mysql_query($data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function updateRecords($data)
    {
        if(mysql_query($data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function deleteRecords($data)
    {
        if(mysql_query($data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function getRecords()
    {
    	$query = "SELECT * from `crud`";
    	return mysql_query($query);
    }

    public function getRecordsById($data)
    {
        return mysql_query($data);
    }
}
?>

<?php
require_once "config/Database.php";

class OrderItemDB
{

    public static function getOrderItems(){
        $connection = Database::getConnectDB();
        $query = "SELECT * FROM orderitems";
        try{
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(2);
            $stmt->closeCursor();
            Database::closeDB();
            return $result;
        }catch (PDOException $e){
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('getOrderItemsLog.txt', $date."->".$e->getMessage()."\n\n",8);
            return false;
        }
    }


}
<?php


class ProductDB
{
    public static function getProducts(){
        $connection = Database::getConnectDB();
        $query = "SELECT * FROM products";
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
            file_put_contents('getProductsLog.txt', $date."->".$e->getMessage()."\n\n",8);
            return false;
        }
    }

    public static function getDetailProductList($categoryID){
        $connection = Database::getConnectDB();
        $query = "SELECT c.*,p.* FROM categories c INNER JOIN products p ON p.categoryID = c.categoryID WHERE c.categoryID = ?";
        try{
            $stmt = $connection->prepare($query);
            $stmt->bindParam(1,$categoryID);
            $stmt->execute();
            $result = $stmt->fetchAll(2);
            $stmt->closeCursor();
            Database::closeDB();
            return $result;
        }catch (PDOException $e){
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('getDetailProductListLog.txt', $date."->".$e->getMessage()."\n\n",8);
            return false;
        }
    }
}
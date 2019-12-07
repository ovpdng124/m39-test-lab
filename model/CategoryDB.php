<?php
require_once "config/Database.php";


class CategoryDB
{
    public static function getCategories()
    {
        $connection = Database::getConnectDB();
        $query = "SELECT * FROM categories";
        try {
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(2);
            $stmt->closeCursor();
            Database::closeDB();
            return $result;
        } catch (PDOException $e) {
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('getCategoriesLog.txt', $date . "->" . $e->getMessage() . "\n\n", 8);
            return false;
        }
    }


    // Create fully functional CRUD - No required on test exam
    public static function createCategory($categoryName) //NO REQUIRED
    {
        $connection = Database::getConnectDB();
        $query = "INSERT INTO categories(categoryName) VALUES (?)";
        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(1, $categoryName);
            $stmt->execute();
            $stmt->closeCursor();
            Database::closeDB();
            return true;
        } catch (PDOException $e) {
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('createCategoryLog.txt', $date . "->" . $e->getMessage() . "\n\n", 8);
            return false;
        }
    }

    public static function updateCategory($categoryID, $categoryName)//NO REQUIRED
    {
        $connection = Database::getConnectDB();
        $query = "UPDATE categories SET categoryName = ? WHERE categoryID = ?";
        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(1, $categoryName);
            $stmt->bindParam(2, $categoryID);
            $stmt->execute();
            $stmt->closeCursor();
            Database::closeDB();
            return true;
        } catch (PDOException $e) {
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('updateCategoryLog.txt', $date . "->" . $e->getMessage() . "\n\n", 8);
            return false;
        }
    }

    public static function deleteCategory($categoryID)//NO REQUIRED
    {
        $connection = Database::getConnectDB();
        $query = "DELETE FROM categories WHERE categoryID = ?";
        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(1, $categoryID);
            $stmt->execute();
            $stmt->closeCursor();
            Database::closeDB();
            return true;
        } catch (PDOException $e) {
            date_default_timezone_set("Asia/Bangkok");
            $date = date("d:m:y h:i:s");
            file_put_contents('deleteCategoryLog.txt', $date . "->" . $e->getMessage() . "\n\n", 8);
            return false;
        }
    }
}
<?php

require_once __DIR__ . '/Model.php';

class Shoe extends Model {
    protected static $table = 'shoes';

    // // override the __set method so that we can hash passwords. if the
    // // given key is not a password, just call the parent method
    // public function __set($name, $value)
    // {
    //     if ($name == 'password') {
    //         $value = password_hash($value, PASSWORD_DEFAULT);
    //     }
    //     parent::__set($name, $value);
   



     public static function findByCategory($category)
    {
        // Get connection to the database
        self::dbConnect();

        //Create select statement using prepared statements
        $query = 'SELECT * FROM ' . static::$table . ' WHERE category = :category';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':category', $category, PDO::PARAM_INT);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

     


        // return either the found instance or null
        return array_map(function($result) {
            $instance = new static;
            $instance->attributes = $result;
            return $instance;
        }, $results);
    }
}

?>
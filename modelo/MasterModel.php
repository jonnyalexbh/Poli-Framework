<?php

class MasterModel {

    protected static $table;
    static $link;

    public static function connect() {
        static::$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASS, DB_DBASE);
    }

    public static function query($sql) {
        static::connect();
        $result = mysqli_query(static::$link, static::sanitize($sql));
        static::close();
        return $result;
    }

    public static function close() {
        mysqli_close(static::$link);
    }

    public static function sanitize($sql) {
        return addslashes($sql);
    }

    //CRUD FUNCTIONS 

    public static function all() {        
        return static::query("SELECT * FROM " . static::$table);
    }
    
    public static function save(){
        
        
    }
    
    public static function deleteById($id){        
        return static::query("DELETE FROM "  . static::$table . " WHERE id = $id");
    }

}

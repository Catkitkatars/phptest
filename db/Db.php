<?php 
class DB {

    private static $data;

    public $id;
    public $postName;
    public $postModel;
    public $postHorsePower;
    public $engine;


    public function __construct($id, $postName, $postModel,$postHorsePower, $engine) 
    {
        $this->id = $id;
        $this->postName = $postName;
        $this->postModel = $postModel;
        $this->postHorsePower = $postHorsePower;
        $this->engine = $engine;
    }

    private static function connect() 
    {
        self::$data = mysqli_connect('localhost', 'root', 'root', 'first_db');

        if(!self::$data) {
            echo "ERROR CONNECT";
            die();
        }
        return self::$data;
    }

    public static function selectAllsqli() {
        $allData = mysqli_query(self::connect(), "SELECT * FROM `garage`");
        $allData = mysqli_fetch_all($allData);
        return $allData;
    }

    public function selectOneSqli() {
        return mysqli_query(self::connect(),"SELECT FROM `garage` WHERE `garage`.`id` = '$this->id'");
    }

    public function addSqli() {
        mysqli_query(self::connect(), "INSERT INTO `garage` (`id`, `name`, `model`, `horsepower`, `engine`) VALUES (NULL, '$this->postName ', '$this->postModel', '$this->postHorsePower', '$this->engine')");
    }

    public function editSqli() {
        mysqli_query(self::connect(),"UPDATE `garage` SET `name` = '$this->postName', `model` = '$this->postModel', `horsepower` = '$this->postHorsePower', `engine` = '$this->engine' WHERE `garage`.`id` = '$this->id'");
    }

    public function deleteSqli() {
        mysqli_query(self::connect(),"DELETE FROM `garage` WHERE `garage`.`id` = '$this->id'");
    }
}



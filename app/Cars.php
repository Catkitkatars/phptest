<?php 
class Cars
{

    public $array;
 

    public function __construct($array) 
    {
        $this->array = $array;
    }

    public function render() 
    {
        foreach ($this->array as $key => $value) 
        {
            echo "
            <div style='padding:20px'>
                <h3>Name: $value[1]</h3>
                <h5>Model: $value[2]</h5>
                <h5>Horsepower: $value[3]</h5>
                <h5>Engine: $value[4]</h5>
                <a href=pages/editThisCar.php?id=" . $value[0] . ">Edit</a>
                <a href=pages/deleteCarSqli.php?id=" . $value[0] . ">Delete</a>
            </div>
            ";
        }
    }
}

       

?>

<?php
    class Vehicles{
        public $name; 
        public $brand; 
        public $model; 
        public $color = "red"; 
        public $fuelType = "diesel";

        function __construct($name, $brand, $model){
            $this->name = $name;
            $this->brand = $brand;
            $this->model = $model; 
        }
        public function printSmth(){
            return "This {$this->name}'s brand is {$this->brand} and model is {$this->model}.";
        }
    }
    $car = new Vehicles("car", "Ford", "Focus SW CRDi");
    $bus = new vehicles("bus", "Volvo", "B8R");
    $motorcycle = new vehicles("motorcycle", "Yamaha", "V-Max");

    class Ships extends Vehicles{
        public $makeYear; 
        public $type; 

        function __construct($name, $type, $makeYear){
            $this->name = $name;
            $this->type = $type; 
            $this->makeYear = $makeYear; 
        }
        public function shipAge(){
            $currentYear = date("Y");
            return $currentYear - $this->makeYear;
        }
        public function shipPrint(){
            return "This ship' name is {$this->name}, it is an {$this->type} and is {$this->shipAge()} years old.";
        }

    }
    $ship = new ships("Argus", "aircraft carrier", 1918);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./components/boot.php"; ?>
    <title>PHP Day 7</title>
</head>
<body>
    <div class="container">
    <div class="m-3 p-3 text-center">
        <p><?= $car->printSmth(); ?></p>
        <p><?= $bus->printSmth(); ?></p>
        <p><?= $motorcycle->printSmth(); ?></p>
        <p><?= $ship->shipPrint(); ?></p>

        <p>All vehicles in the class "Vehicles" have <span class="text-danger"><?= $car->color ?></span> color and use <?= $car->fuelType ?>.</p>
    </div>
    
    </div>
    
</body>
</html>
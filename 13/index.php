<?php
    // ООП #1
    class Car {
        public $color = 'White';
        public $speed;
        public $fuel;
        public $brand;
        
        public function __construct($brand=1, $speed=2, $fuel=3, $color=4) {
            $this->brand = $brand;
            $this->speed = $speed;
            $this->fuel = $fuel;
            $this->color = $color;
        }
        
        public function triptime($distance) {
            $time = $distance / $this->speed;
            return $time;
        }
        
        /*
            public function __construct() {
                echo '<br>New object of class '. __CLASS__ . ' created';
                echo '<br>Method '. __METHOD__ . ' called';
            }

            public function __destruct() {
                echo '<br>Method ' . __METHOD__ . 'called';
                echo '<br>Object deleted';
            }
        */
    }
    $car1 = new Car('Audi', 110, 12, 'Yellow');
    $car2 = new Car('Ford', 130, 14, 'Black');
    
    echo '<br>Car 1 time: '. $car1->tripTime(1000);
    echo '<br>Car 2 time: '. $car2->tripTime(1000);
    /*
        $car1 = new Car;
        $car1->brand = 'Audi';
        $car1->speed = 110;
        $car1->fuel = 12;
        //$car1->test();
        unset($car1);

        $car2 = new Car;
        $car2->brand = 'Ford';
        $car2->speed = 130;
        $car2->fuel = 13;
        $car2->color = 'Black';
    */
    
    /*
    print_r($car1);
    print_r($car2);
    */
    
    //echo $car2->color;
    
    /*
        echo 'brand:' . $car1->brand . ', time: ' . $car1->triptime(1000) . '<br>';
        echo 'brand:' . $car2->brand . ', time:' . $car2->triptime(1000);
     */
    class Car1 {
        const WHEELS = 4;
        
        public function test() {
            echo '<br>Bicycle: ' . Bicycle::WHEELS;
            echo '<br> Car1:' . self::WHEELS;
        }
    }
    Car1::test();
    
    class Bicycle {
        const WHEELS = 2;
    }
    
    //echo '<br>Car1: ' . Car1::WHEELS;
    //echo '<br>Bicycle: ' . Bicycle::WHEELS;
    
    /*
        this - для доступу до об'єкту
        self - для доступу до класу
        :: - доступ до елементів класу
        -> - доступ до елементів об'єкту
     */
?>

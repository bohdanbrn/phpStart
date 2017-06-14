<?php
    class Phone {
        public function getNumberByName($name) {
            // ...
        }
        public function dialNumber() {
            // ...
        }
        public function call($name) {
            $number = $this->getNumberByName($name);
            $this->dialNumber($number);
        }
    }
    $phone = new Phone;
    $phone->call('Саша');

?>
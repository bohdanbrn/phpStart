<?php

class Base {
    public $a = 'a public';
    protected $b = 'b protected_l';
    private $c = 'c private';

}

class Inherited extends Base {
    function printProperties() {
        echo '<br>' . $this->a;
        echo '<br>' . $this->b;
        echo '<br>' . $this->c;
    }
}

$obj = new Inherited();

// echo '<br>' . $obj->a;   // працює
// echo '<br>' . $obj->b;   // видає помилку
// echo '<br>' . $obj->c;   // невизначений
// $obj->printProperties();  // виводить public, protected і private


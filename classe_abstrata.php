<?php

abstract class Shape {

    // Abstract method to calculate the area
    abstract function calculateArea();

    // Public method to display the shape's properties
    public function displayShape() {
        echo "Forma: " . get_class($this) . "\n";
    }
}

// Concrete class inheriting from Shape
class Circle extends Shape {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Concrete class inheriting from Shape
class Rectangle extends Shape {

    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create and use Circle and Rectangle objects
$circle = new Circle(5);
$rectangle = new Rectangle(10, 7);

echo "Área do círculo: " . $circle->calculateArea() . "\n";
$circle->displayShape();

echo "\nÁrea do retângulo: " . $rectangle->calculateArea() . "\n";
$rectangle->displayShape();

?>
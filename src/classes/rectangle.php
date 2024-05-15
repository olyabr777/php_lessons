<?php

class Rectangle extends Figure {
    private float $length;
    private float $width;

    // Constructor
    public function __construct(float $length, float $width) {
        if ($length <= 0 || $width <= 0) {
            throw new InvalidArgumentException("Length and width must be positive numbers.");
        }
        $this->length = $length;
        $this->width = $width;
    }

    // calculate area
    public function area(): float {
        return $this->length * $this->width;
    }

    // calculate perimeter
    public function perimeter(): float {
        return 2 * ($this->length + $this->width);
    }

    // get area
    public function getArea(): float {
        return $this->area();
    }

    // get perimeter
    public function getPerimeter(): float {
        return $this->perimeter();
    }
}
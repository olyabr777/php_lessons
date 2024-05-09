<?php

class Text {
    protected string $text = "some text";

    public function print(): void {
        echo ucfirst($this->text);
    }
}

class UppercaseText extends Text {
    public function print(): void {
        echo strtoupper($this->text);
    }
}
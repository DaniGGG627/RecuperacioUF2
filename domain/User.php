<?php
class User {
    public int $id;
    public string $name;

    public function __construct($name, $id = 0) {
        $this->name = $name;
        $this->id = $id;
    }
}

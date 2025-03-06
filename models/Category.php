<?php

class Category extends Model {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }


}
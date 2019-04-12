<?php
namespace App\Consumer;

class ConsumerParams {

    private $params = array();

    public function add(string $key, string $value) {
        $this -> params[$key] = $value;
    }
    public function get ($key) {
        return $this->params[$key];
    }
    public function __get(string $key) {
        return $this -> get($key);
    }
    public function __set(string $key, string $value) {
        return $this -> add($key, $value);
    }

    public function toArray() {
        return $this->params;
    }
}
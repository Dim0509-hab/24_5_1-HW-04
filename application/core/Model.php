<?php
class Model {
    protected $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'user', 'password', 'database');
        $this->db->set_charset('utf8');
    }
}

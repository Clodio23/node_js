<?php

class Sekolah
{

    private $table = 'tb_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSekolah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}

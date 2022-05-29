<?php

class Model_management
{

    private $table = 'tb_login';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllManagement()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getmanagementById($admin_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admin_id=:admin_id');
        $this->db->bind('admin_id', $admin_id);
        return $this->db->single();
    }

    public function getForUser($admin_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admin_id=:admin_id');
        $this->db->bind('admin_id', $admin_id);
        $this->db->execute(['admin_id' => $admin_id]);
        return $this->db->fetchAll();
    }
    public function hapusDataManagement($id)
    {
        $query = "DELETE FROM tb_login WHERE admin_id = :admin_id";
        $this->db->query($query);
        $this->db->bind('admin_id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}

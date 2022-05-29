<?php

class Admin extends Model
{
    var $username;
    var $password_hash;
    var $admin_id;
    var $level;


    public function getAlllogin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getForAdmin($admin_id)
    {
        $SQL = 'SELECT *FROM tb_admin WHERE admin_id = :admin_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['admin_id' => $admin_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetchAll();
    }
    public function getForPegawai($admin_id)
    {
        $SQL = 'SELECT *FROM tb_pegawai WHERE admin_id = :admin_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['admin_id' => $admin_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetchAll();
    }
    public function getForAbsend($admin_id)
    {
        $SQL = 'SELECT *FROM tb_absen WHERE admin_id = :admin_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['admin_id' => $admin_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetchAll();
    }

    public function find($admin_id)
    {
        session_reset();
        $SQL = 'SELECT *FROM tb_login WHERE admin_id = :admin_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['admin_id' => $admin_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetch();
    }



    public function findUser($username)
    {
        $SQL = 'SELECT *FROM tb_login WHERE username = :username';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $username]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin');
        return $stmt->fetch();
    }

    public function create()
    {
        $SQL = 'INSERT INTO tb_login(username, nip, password_hash, level) VALUES(:username, :nip, :password_hash, :level)';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $this->username, 'nip' => $this->nip, 'password_hash' => $this->password_hash, 'level' => $this->level]);
        return $stmt->rowCount();
    }
}

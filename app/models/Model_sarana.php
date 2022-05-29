<?php

class Model_sarana
{

    private $table = 'tb_sarana';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // parent::__construct();
    }

    public function getAllsarana()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSaranaById($id_sarana)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_sarana=:id_sarana');
        $this->db->bind('id_sarana', $id_sarana);
        return $this->db->single();
    }


    public function tambahDataSarana()
    {
        $query = "INSERT INTO tb_sarana
                    VALUES
                    ('', :jenis_sarana, :letak, :kepemilikan, :spesifikasi, :jumlah, :laik, :tidak_laik)";

        $this->db->query($query);
        $this->db->bind('jenis_sarana', $this->jenis_sarana);
        $this->db->bind('letak', $this->letak);
        $this->db->bind('kepemilikan', $this->kepemilikan);
        $this->db->bind('spesifikasi', $this->spesifikasi);
        $this->db->bind('jumlah', $this->jumlah);
        $this->db->bind('laik', $this->laik);
        $this->db->bind('tidak_laik', $this->tidak_laik);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSarana($data)
    {
        $query = "UPDATE tb_sarana SET
        jenis_sarana = :jenis_sarana,
        letak = :letak,
        kepemilikan = :kepemilikan,
        spesifikasi = :spesifikasi,
        jumlah = :jumlah,
        laik = :laik,
        tidak_laik = :tidak_laik
        WHERE id_sarana = :id_sarana";

        $this->db->query($query);
        $this->db->bind('jenis_sarana', $data['jenis_sarana']);
        $this->db->bind('letak', $data['letak']);
        $this->db->bind('kepemilikan', $data['kepemilikan']);
        $this->db->bind('spesifikasi', $data['spesifikasi']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('laik', $data['laik']);
        $this->db->bind('tidak_laik', $data['tidak_laik']);
        $this->db->bind('id_sarana', $data['id_sarana']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSarana($id_sarana)
    {

        $query = "DELETE FROM tb_sarana WHERE id_sarana = :id_sarana";
        $this->db->query($query);
        $this->db->bind('id_sarana', $id_sarana);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

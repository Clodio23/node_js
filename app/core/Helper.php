<?php

function conn()
{
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

function user()
{
    if (isset($_SESSION['admin_id'])) {
        $admin = $_SESSION['admin_id'];
        return mysqli_query(conn(), "SELECT * FROM `tb_login` WHERE `admin_id` = '$admin'")->fetch_object();
    }
    return false;
}
function foto()
{
    if (isset($_SESSION['admin_id'])) {
        $admin = $_SESSION['admin_id'];
        return mysqli_query(conn(), "SELECT * FROM `tb_admin` WHERE `admin_id` = '$admin'")->fetch_object();
    }
    return false;
}

function db_guru($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_pegawai($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_siswa($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_kurikulum($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_ujian($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_sarana($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}
function db_surat($tb = null)
{
    return mysqli_query(conn(), "SELECT * FROM `$tb`")->num_rows;
}

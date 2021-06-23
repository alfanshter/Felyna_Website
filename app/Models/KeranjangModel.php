<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'felyna_cart';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_barang';
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $allowedFields = ['nama_barang', 'harga_barang', 'foto', 'jenis_software', 'nama_database', 'slug', 'username'];

    public function getKeranjang($username = false)
    {

        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $username])->findAll();
    }

    public function deleteKeranjang($id_barang)
    {
        return  $this->delete($id_barang);
    }
}

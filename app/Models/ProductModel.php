<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'id_product';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_product', 'harga_product', 'tahun', 'detail_kendaraan', 'id_user', 'gambar_product'];

    public function getProduct($id_product = false)
    {

        if ($id_product == false) {
            return $this->findAll();
        }

        return $this->where(['id_product' => $id_product])->first();
    }

    public function countProduct()
    {
        return $this->countAllResults();
    }
}

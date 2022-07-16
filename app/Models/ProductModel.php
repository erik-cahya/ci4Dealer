<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'id_product';

    // untuk mengaktifkan fitur created_at & deleted_at
    protected $useTimeStamps = true;

    public function getProduct($id_product = false)
    {

        // ketika tidak ada slug yang diinputkan, maka tampilkan semua data/findAll()
        if ($id_product == false) {
            return $this->findAll();
        }

        return $this->where(['id_product' => $id_product])->first();
    }
}

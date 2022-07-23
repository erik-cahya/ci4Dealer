<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'tb_order';
    protected $primaryKey = 'id_order';
    protected $useTimestamps = true;

    protected $allowedFields = ['id_product', 'id_user', 'status_order'];

    public function getOrder($id_order = false)
    {

        if ($id_order == false) {
            return $this->findAll();
        }

        return $this->where(['id_order' => $id_order])->first();
    }
}

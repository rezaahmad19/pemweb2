<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table            = 'orang';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['name', 'address'];

    public function search($kataKunci)
    {
        return $this->like('name', $kataKunci)
            ->orLike('address', $kataKunci);
    }
}

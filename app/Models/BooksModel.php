<?php

namespace App\Models;

use CodeIgniter\Model;


class BooksModel extends Model
{
    protected $table = 'books';
    protected $primarykey = 'id';
    protected $useTimetamps = 'true';
    public function getBuku($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
            # code...
        }

        return $this->where(['slug' => $slug])->first();
    }
}

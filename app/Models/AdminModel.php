<?php
namespace App\Models;
use App\Models\BaseModel;

class AdminModel extends BaseModel
{
    var $table='admin';

    public function getEmail($email)
    {
        $db = \Config\Database::connect();
        return $this->db->table($this->table)->where('name',$email)->get()->getRow();
    }
}
?>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $table = 'Contacts';
    protected $primaryKey = 'Contacts_ID';

    public function contactName()
    {
        return $this->Contacts_Name;
    }
}
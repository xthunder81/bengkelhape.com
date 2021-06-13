<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class pegawai extends Authenticable
{
    //
    use Notifiable;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $guarded = [];
}

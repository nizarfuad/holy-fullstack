<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class LuckpermsPlayer extends Model implements Authenticatable
{
    use AuthenticatableTrait; // Pastikan trait ini digunakan agar bisa digunakan oleh Auth

    protected $table = 'luckperms_players'; // Nama tabel di database
    protected $primaryKey = 'uuid'; // Pastikan ini sesuai dengan primary key di tabel
    protected $appends = ['group', 'lp_username', 'lp_uuid', 'lp_group'];
    public $incrementing = false; // Karena UUID adalah string, nonaktifkan auto-increment
    protected $keyType = 'string'; // Pastikan UUID dibaca sebagai string
    public $timestamps = false; // Matikan timestamps jika tidak ada `created_at` & `updated_at`

    protected $fillable = ['uuid', 'username', 'primary_group'];

    public function getLpUsernameAttribute()
    {
        return $this->username;
    }

    public function getLpUuidAttribute()
    {
        return $this->uuid;
    }

    public function getLpGroupAttribute()
    {
        return $this->primary_group;
    }

    public function getAuthIdentifierName()
    {
        return 'username'; // Menggunakan UUID sebagai identitas autentikasi
    }

    public function getGroupAttribute()
    {
        return Str::upper($this->primary_group);
    }
}

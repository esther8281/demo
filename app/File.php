<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use App\Traits\AvatarUrlTrait;

class File extends Model
{
    use Notifiable,
    AvatarUrlTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'directory_id','avatar'];
    
    public function directory()
    {
        return $this->belongsTo(Directory::class,'directory_id' ,'id');
    }
}

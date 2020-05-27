<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use App\Traits\AvatarUrlTrait;

class Directory extends Model
{
    use Notifiable,
    AvatarUrlTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'];
    
    public function files()
    {
        return $this->hasmany(File::class,'directory_id' ,'id');
    }
}

<?php

namespace App\Traits;

trait AvatarUrlTrait{
	public function getAvatarUrlAttribute()
	{
		return url(\Storage::disk('local')->url($this->image));
	}
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFileRequest extends FormRequest
{
   public function authorize()
   {
    return true;
   }

   public function rules(){
      return [
        'avatar' => 'required|mimes:jpeg,jpg,png,gif,pdf,docx,doc,txt|max:2000000',
      ];
   }
}

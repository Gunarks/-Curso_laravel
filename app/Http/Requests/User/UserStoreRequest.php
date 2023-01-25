<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'      => 'string|required',
            'email'     => 'email|required',
            'password' => 'string|required',
        ];
    }

    public function mensage() {
        return [
            'string'    => 'Esse campo prescisa ser do tipo string',
            'email'     => 'O e-mail precisa ser um e-mail válido!',
            'password'  => 'A senha pracisa te no mímino 8 caracters e no máximo 18',
        ];
    }
}

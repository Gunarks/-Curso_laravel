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
            'street'    => 'string|required',
            'number'    => 'string|required',
            'password'  => 'string|required',
            'terms'     => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'name.string'     => 'O nome precisa ser uma string',
            'email'           => 'O e-mail precisa ser um e-mail válido!',
            'street.string'   => 'O endereço precisa ser uma string',
            'number.string'   => 'O número precisa ser uma string',
            'password.string' => 'A senha precisa ter no mínimo 8 caractéres!',
            'terms'           => 'Aceite os termos de uso',
        ];
    }
}

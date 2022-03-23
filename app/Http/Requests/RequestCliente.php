<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestCliente extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        if($this->method() == "PUT"){
            return [
                'nome' => ['required', 'string', 'max:255','regex:/^([a-zA-Zà-úÀ-Ú]|-|_|\s)+$/'],
                'dataNascimento' => ['required', 'date'],
                'telefone' => ['required', 'string'],
                'email' => ['required', 'string', 'max:255'],
                'cpf' => ['required', 'string'],
                'endereco' => ['required', 'string', 'max:255']
            ];
        }

        if($this->method() == "POST"){
            return [
                'nome' => ['required', 'string', 'max:255','regex:/^([a-zA-Zà-úÀ-Ú]|-|_|\s)+$/'],
                'dataNascimento' => ['required', 'date'],
                'telefone' => ['required', 'string'],
                'email' => ['required', 'string', 'max:255'],
                'cpf' => ['required', 'string'],
                'endereco' => ['required', 'string', 'max:255']
            ];
        }
    }

    public function attributes(){
        return [
            'nome' => "Nome Completo",
            'dataNascimento' => "Data de Nascimento",
            'telefone' => "Telefone",
            'email' => "E-mail",
            'cpf' => "CPF",
            'endereco' => "Endereço"
        ];
    }
}

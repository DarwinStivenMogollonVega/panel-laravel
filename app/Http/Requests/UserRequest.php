<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación que se aplican al request.
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $this->route('usuario'),
            'password' => 'required|min:8|confirmed',
        ];
    }

    /**
     * Mensajes personalizados para los errores de validación.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.string'   => 'El campo nombre debe ser una cadena de texto.',
            'name.max'      => 'El campo nombre no puede superar los 255 caracteres.',

            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email'    => 'Debe ingresar un correo electrónico válido.',
            'email.unique'   => 'Este correo electrónico ya está registrado.',

            'password.required'  => 'El campo contraseña es obligatorio.',
            'password.min'       => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
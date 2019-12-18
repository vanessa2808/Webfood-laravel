<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role_id' => 'required',
            'name' => 'required',
            'avatar' => 'required',

            'gender' => 'required',
            'dateofbirth' => 'required',

            'address' => 'required',
            'email' => 'required',
            'password' => 'required',

        ];
    }
    public  function  messages()
    {
        return [
            'role_id.required' => 'please enter role id',
            'name.required' => 'please enter name',
            'avatar.required' => 'please enter avatar',
            'gender.required' => 'please enter gender',
            'dateofbirth.required' => 'please enter dateofbirth',
            'address.required' => 'please enter address',
            'email.required' => 'please enter email',
            'password.required' => 'please enter password',


        ];
        }
}

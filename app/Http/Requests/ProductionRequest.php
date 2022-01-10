<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             // 'date' => 'required',
             'divisi' => 'required|min:1',
             'shift' => 'required|min:1',
             'start' => 'required|min:1',
             'finish' => 'required|min:1',
             'batch' => 'required|min:1',
             'wip' => 'required',
             'bs' => 'required|min:1',
             'gas' => 'required|min:1',
             'person' => 'required|min:1',
             'description' => 'required',
             'good_id' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}

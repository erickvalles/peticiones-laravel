<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGuardaSolicitud extends FormRequest
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
            "tramite_id"=>"required|numeric",
            "detalle"=>"required|min:10"
        ];
    }

    public function messages()
    {
        return [
            'tramite_id.numeric'=>"No seas tramposo"
        ];
    }

    public function attributes()
    {
        return [
            'tramite_id' => "tipo de trámite"
        ];
    }
}

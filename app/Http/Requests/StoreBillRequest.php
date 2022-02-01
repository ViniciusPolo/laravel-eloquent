<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBillRequest extends FormRequest
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
        return[
                'invoice'=>'required',
                'client_id'=>Client::where('name','not in','%Guest%')->get('id')
    
            ];
        }
        public function messages()
        {
            return [
                'invoice.required'=>'Uma fatura é obrigatória.'
            ];
        }
}


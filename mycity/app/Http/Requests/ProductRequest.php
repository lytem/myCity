<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [

                'product.title'=>"required|string|unique:products,title",
                'product.price'=>'required|int',
                'product.publish_date'=>'required|date|after:yesterday'

        ];
    }
    public function attributes()
    {
        return [
            'product.title'=>'Title',
            'product.price'=>'Price',
            'product.publish_date'=>'Publish date'
        ];
    }
    public function messages()
    {
        return [
            'product.title.required'=>'il Titolo è obbligatorio',
            'product.price.required'=>'il Prezzo è obbligatorio ',
            'product.publish_date.required'=>'la Data di pubblicazione è obbligatoria'
        ];
    }
}

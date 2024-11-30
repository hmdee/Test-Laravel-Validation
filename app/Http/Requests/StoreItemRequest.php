<?php

namespace App\Http\Requests;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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

            'name' => [
                'required',
            ],
            'description ' => [
                'required',



            ],

            'category_id' => [
                'required', // التأكد من وجود category_id
                'exists:categories,id' // التأكد من أن category_id يشير إلى فئة موجودة في جدول categories
            ],
        ];
    }
    public function messages()
    {
        return [
            'title.required' => ' مطلوب حيا او ميتاا.',
            'title.unique' => 'هذا العنوان موجود بالفعل.',
            'text.required' => 'يجب كتابة نص البوست.',
            'text.min' => 'يجب أن يكون النص مكونًا من 10 أحرف على الأقل.',
        ];
    }
}

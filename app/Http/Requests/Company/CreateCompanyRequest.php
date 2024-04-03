<?php

namespace App\Http\Requests\Company;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CreateCompanyRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return array_merge(parent::rules(), [
            'company_name' => 'required',
            'person_name' => 'required',
            'username' => 'required|alpha_dash|unique:companies',
            'email' => 'required|email|unique:companies',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);
    }

    /**
    * Custom message for validation
    *
    * @return array
    */
   public function messages()
   {
        return array_merge(parent::messages(), [            
            'company_name.required' => __('Tên công ty không được để trống.'),
            'person_name.required' => __('Tên người liên hệ không được để trống.'),
            'username.required' => __('Tên đăng nhập không được để trống.'),
            'username.alpha_dash' => __('Tên đăng nhập không hợp lệ.'),
            'username.unique' => __('Tên đăng nhập đã tồn tại.'),
            'email.required' => __('Email không được để trống.'),
            'email.email' => __('Email không đúng định dạng'),
            'email.unique' => __('Địa chỉ email đã tồn tại.'),
            'password.required' => __('Mật khẩu không được để trống.'),
            'retype_password.required' => __('Mật khẩu nhập lại không được để trống.'),
            'retype_password.same' => __('Mật khẩu nhập lại không chính xác.'),
        ]);
   }
   
   /**
    *  Filters to be applied to the input.
    *
    * @return array
    */
   /*
   public function filters()
   {
       return [
           'email' => 'trim|lowercase',
           'name' => 'trim|capitalize|escape'
       ];
   }
   */
}

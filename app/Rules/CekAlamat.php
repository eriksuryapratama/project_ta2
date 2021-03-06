<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CekAlamat implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //ATURAN PENGECEKKAN ALAMAT
        if(preg_match('/[A-Za-z]/', $value) && preg_match('/[0-9]/', $value)){
            return true;
        }else{
            return false;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute harus mengandung unsur huruf dan nomor';
    }
}

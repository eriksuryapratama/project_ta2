<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CekAngka implements Rule
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
        //ATURAN PENGECEKKAN ANGKA
        if(preg_match('/[0-9]/', $value)){
            return true;
        }else if(preg_match('/[A-Za-z]/', $value)){
            return false;
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
        return ':attribute harus angka !';
    }
}

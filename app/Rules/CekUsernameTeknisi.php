<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CekUsernameTeknisi implements Rule
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
         //ATURAN USERNAME CUSTOMER SAMA
         $cekuser = DB::select('select username_teknisi from teknisi');
         foreach ($cekuser as $user) {
             if($value == $user->username_teknisi){
                 return false;
             }
         }
         return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Username sudah terdaftar !';
    }
}

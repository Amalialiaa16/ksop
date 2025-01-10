<?php

namespace App\Actions\Fortify;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return [
            'required',               // Wajib diisi
            'string',                 // Harus berupa string
            'min:8',                  // Minimal 8 karakter
            'regex:/[A-Z]/',          // Harus ada minimal 1 huruf besar
            'regex:/[a-z]/',          // Harus ada minimal 1 huruf kecil
            'regex:/[0-9]/',          // Harus ada minimal 1 angka
            'regex:/[@$!%*#?&]/',     // Harus ada minimal 1 simbol
            'confirmed',              // Cocok dengan password_confirmation
        ];
    }
}

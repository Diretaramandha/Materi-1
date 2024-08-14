<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);

        return new User([
            'name'     => $row[0],
            'email'    => $row[1],
            'password' => bcrypt($row[2]),
        ]);
    }

    public function rules(): array
    {
        return [
            '*.email' => ['email', 'unique:users,email'],
        ];
    }
}

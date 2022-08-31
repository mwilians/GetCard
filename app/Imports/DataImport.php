<?php

namespace App\Imports;


use App\Models\{User, Pengguna};

use Illuminate\Support\Facades\{Hash,Auth};

use Illuminate\Support\Collection;

use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Validators\Failure;

use Illuminate\Support\Facades\Validator;

use Maatwebsite\Excel\Concerns\{Importable, SkipsEmptyRows, SkipsErrors, SkipsFailures, ToCollection, WithHeadingRow, SkipsOnError, SkipsOnFailure, ToModel, WithValidation};


class DataImport implements ToCollection, WithHeadingRow, SkipsOnFailure, WithValidation, SkipsOnError, SkipsEmptyRows

{

    use Importable, SkipsErrors, SkipsFailures;

    // public function generateUniqueCode()
    // {
    //     do {
    //         $no_id = random_int(100000, 999999);
    //     } while (Pengguna::where("no_id", "=", $no_id)->first());
  
    //     return $no_id;
    // }

    public function collection(Collection $rows) {

        Validator::make($rows->toArray(),[

            '*.nama' => 'required',
            '*.jenis_kelamin' => 'required',
            '*.jabatan' => 'required',
            '*.telepon' => 'required',
            '*.email' => 'required',
            '*.tanggal_bergabung' => 'required',
            '*.tanggal_berakhir' => 'required',

        ])->validate();

        foreach ($rows as $row) {

            $user_id = Auth::user()->id;

            $no_id = 123112;


            Pengguna::create([

                "user_id" => $user_id,
                "no_id" => $no_id,
                "nama" => $row['nama'],
                "jenis_kelamin" => $row['jenis_kelamin'],
                "jabatan" => $row['jabatan'],
                "telepon" => $row['telepon'],
                "email" => $row['email'],
                "tanggal_bergabung" => $row['tgl_bergabung'],
                "tanggal_berakhir" => $row['tgl_berakhir'],
            
            ]);

        }

    }


    public function rules(): array {

        return [

            '*.email' => ['email','unique:pengguna,email']

        ];

    }

}


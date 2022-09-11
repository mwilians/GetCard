<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\{ToCollection,ToModel,WithHeadingRow};
use App\Models\Pengguna;

class CobaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    */

    public function generateUniqueCode()
    {
        do {
            $no_id = random_int(100000, 999999);
        } while (Pengguna::where("no_id", "=", $no_id)->first());
  
        return $no_id;
    }

    public function model(array $row)
    {
        $user_id = Auth::user()->id;
        $no_id = $this->generateUniqueCode();

        return new Pengguna([
            "user_id" => $user_id,
            "no_id" => $no_id,
            "nama" => $row['nama'],
            "jenis_kelamin" => $row['jenis_kelamin'],
            "jabatan" => $row['jabatan'],
            "telepon" => $row['telepon'],
            "email" => $row['email'],
            "tanggal_bergabung" => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tgl_bergabung']),
            "tanggal_berakhir" => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tgl_berakhir']),
        ]);
    }

    // \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject
}

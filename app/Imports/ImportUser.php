<?php
namespace app\Imports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
class ImportUser implements ToModel
{
   public function model(array $row)
   {
    dd('hai');
       return new User([
           'name' => $row['name'],
           'email' => $row['email'],
           'password' => bcrypt($row['password']),
       ]);
   }
}
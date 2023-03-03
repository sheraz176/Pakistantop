<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = Area::create([
        	'name' => 'Shymkent',
        	'lat' => '42.340782',
        	'lng' => '69.596329',
            'map_area_name' => 'Shymkent'
        ]);

    }
}

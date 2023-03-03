<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReligionIcon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ReligionIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icon = ReligionIcon::create([
        	'name' => 'Islam',
        	'url' => config('app.url').'/images/islam.svg',
        ]);

        $icon = ReligionIcon::create([
        	'name' => 'Christianity',
        	'url' => config('app.url').'/images/christian.svg',
        ]);
        $icon = ReligionIcon::create([
        	'name' => 'Buddhism',
        	'url' => config('app.url').'/images/buddhism.svg',
        ]);
        $icon = ReligionIcon::create([
        	'name' => 'Jewish religion',
        	'url' => config('app.url').'/images/jewish.svg',
        ]);
        $icon = ReligionIcon::create([
        	'name' => 'New religions',
        	'url' => config('app.url').'/images/other.svg',
        ]);

    }
}

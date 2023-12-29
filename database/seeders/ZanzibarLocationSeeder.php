<?php

namespace Database\Seeders;

use App\Http\Imports\LocationImporter;
use App\Models\Location\Country;
use App\Models\Location\District;
use App\Models\Location\Region;
use App\Models\Location\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ZanzibarLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $excels = Excel::toCollection(new LocationImporter, public_path('datasets/zanzibar.xlsx'));
        $this->command->info('Seeding Zanzibar Location Data');
        $country = Country::firstOrCreate([
            'name' => 'Zanzibar',
            'code' => '255',
        ]);
        $i = 0;

        foreach ($excels as $excel) {
            foreach ($excel  as $exc) {
                $region = Region::firstOrCreate([
                    'name'          => trim($exc['region']),
                    'code'          => trim($exc['region_code']),
                    'country_id'    => $country->id,
                ]);

                $district = District::firstOrCreate([
                    'name'          => trim($exc['district']),
                    'code'          => trim($exc['district_code']),
                    'region_id'     => $region->id,
                    'country_id'    => $country->id,
                ]);

                $ward = Ward::firstOrCreate([
                    'name'          => trim($exc['ward']),
                    'code'          => trim($exc['ward_code']),
                    'district_id'   => $district->id,
                    'region_id'     => $region->id,
                    'country_id'    => $country->id,
                ]);

                $this->command->info('Created location ' . trim($exc['region']) . ', ' . trim($exc['district']) . ', ' . trim($exc['ward']));
                $i++;
            }
        }
    }
}

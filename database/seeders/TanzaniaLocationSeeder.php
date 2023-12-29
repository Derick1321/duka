<?php

namespace Database\Seeders;


use App\Models\Location\District;
use App\Models\Location\Region;
use App\Models\Location\Street;
use App\Models\Location\Ward;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Imports\LocationImporter;
use App\Models\Location\Country;

class TanzaniaLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $excels = Excel::toCollection(new LocationImporter, public_path('datasets/tanzania.xlsx'));
        $this->command->info('Deleting countries ...');
        Country::where('created_at', '<=', Carbon::now()->format('Y-m-d H:i:s'))->forceDelete();
        $this->command->warn('Countries deleted ...');
        $this->command->info('Deleting regions ...');
        Region::where('created_at', '<=', Carbon::now()->format('Y-m-d H:i:s'))->forceDelete();
        $this->command->warn('Regions deleted ...');
        $this->command->info('Deleting districts ...');
        District::where('created_at', '<=', Carbon::now()->format('Y-m-d H:i:s'))->forceDelete();
        $this->command->warn('Districts deleted ...');
        $this->command->info('Deleting Wards ...');
        Ward::where('created_at', '<=', Carbon::now()->format('Y-m-d H:i:s'))->forceDelete();
        $this->command->warn('Wards deleted ...');
        $this->command->info('Deleting villages ...');
        Street::where('created_at', '<=', Carbon::now()->format('Y-m-d H:i:s'))->forceDelete();
        $this->command->warn('Villages deleted ...');
        $this->command->info('Insering new data ...');
        $country = Country::firstOrCreate([
            'name' => 'Tanzania',
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

                Street::firstOrCreate([
                    'name'          => trim($exc['village_mtaa']),
                    'code'          => trim($exc['village_mtaa_code']),
                    'ward_id'       => $ward->id,
                    'district_id'   => $district->id,
                    'region_id'     => $region->id,
                    'country_id'    => $country->id,
                ]);
                $this->command->info('Created location ' . trim($exc['region']) . ', ' . trim($exc['district']) . ', ' . trim($exc['ward']) . ', ' . trim($exc['village_mtaa']));
                $i++;
                //                if($i == 10 ){
                //                    break;
                //                }
            }
        }
    }
}

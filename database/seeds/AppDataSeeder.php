<?php

use Illuminate\Database\Seeder;

class AppDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


		\App\Bus::create([
			'busnumber' => '23',
			'sourceterminal' => 'Thokar',
			'destinationterminal' => 'RA Bazar',
			'companyname' => 'Bandial',
			'farelist' => ' ',
			'status' => 'ON',
			'starttime' => '05:00',
			'endtime' =>'05:00',
		]);


		\App\Bus::create([
			'busnumber' => '22',
			'sourceterminal' => 'Thokar',
			'destinationterminal' => 'Muslim Town',
			'companyname' => 'LTC',
			'farelist' => ' ',
			'status' => 'ON',
			'starttime' => '05:00',
			'endtime' =>'05:00',
		]);


		\App\Bus::create([
			'busnumber' => '36',
			'sourceterminal' => 'Mughal Pura',
			'destinationterminal' => 'Chungi AmerSidhu',
			'companyname' => 'LTC',
			'farelist' => ' ',
			'status' => 'ON',
			'starttime' => '05:00',
			'endtime' =>'05:00',
		]);



		\App\Stop::create([
			'stopname'=> 'Qainchi',
			'longitude'=> '74.3483',
			'latitude'=> '31.4643',
		]);


		\App\Stop::create([
			'stopname'=> 'kotLakhpat',
			'longitude'=> '74.3324',
			'latitude'=> '31.4642',
		]);



		\App\Stop::create([
			'stopname'=> 'Pindi Stop',
			'longitude'=> '74.327',
			'latitude'=> '31.46',
		]);


		\App\Stop::create([
			'stopname'=> 'Model Town Link road',
			'longitude'=> '74.317',
			'latitude'=> '31.4684',
		]);

		
		\App\Stop::create([
			'stopname'=> 'Jinnah Hospital',
			'longitude'=> '74.2931',
			'latitude'=> '31.4866',
		]);

		

		\App\Route::create([
			'bus_id'=>'1',
			'stop_id'=> '1',
		]);



		\App\Route::create([
			'bus_id'=>'1',
			'stop_id'=> '2',
		]);


		\App\Route::create([
			'bus_id'=>'1',
			'stop_id'=> '3',
		]);



		\App\Route::create([
			'bus_id'=>'1',
			'stop_id'=> '4',
		]);


		\App\Route::create([
			'bus_id'=>'1',
			'stop_id'=> '5',
		]);




		\App\Route::create([
			'bus_id'=>'2',
			'stop_id'=> '3',
		]);



		\App\Route::create([
			'bus_id'=>'2',
			'stop_id'=> '4',
		]);


		\App\Route::create([
			'bus_id'=>'2',
			'stop_id'=> '5',
		]);


		\App\Appuser::create([
			'MAC'=>'1234567890',
			'email' => 'alihaider123go@gmail.com',
			'name'=>'ali haider',
			'installingdate'=>'1/1/2016',
		]);
















    }
}

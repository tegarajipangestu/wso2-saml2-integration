<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Role::getQuery()->delete();
    	// if (($handle = fopen("database/seeds/csv/roles.csv", "r")) !== FALSE) {
    	// 	while (($data = fgetcsv($handle, 10, ",")) !== FALSE) {
    	// 		$num = count($data);
    	// 		for ($i=0; $i < $num; $i++) {
			  //   	DB::table('roles')->insert([
			  //   		'name' => $data[$i],
			  //   		]);
    	// 		}
    	// 	}
    	// 	fclose($handle);
        factory(App\User::class, 50)->create();
    }
}

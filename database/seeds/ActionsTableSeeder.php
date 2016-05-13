<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
    	dd(Route::getRoutes()->getRoutes());
    foreach (Route::getRoutes()->getRoutes() as $route)
		{
			$controllers = [];
		    $action = $route->getAction();

		    if (array_key_exists('controller', $action))
		    {
		        // You can also use explode('@', $action['controller']); here
		        // to separate the class name from the method
		        $controllers[] = $action['controller'];
		    }
		    dd($controllers);
		}

    	DB:table('actions')->insert([
    			'controller_name' => 'mamam',
    			'method_name' => 'mamam'
    		]);
    	// factory(App\Action::class, 50)->create();
    }
}

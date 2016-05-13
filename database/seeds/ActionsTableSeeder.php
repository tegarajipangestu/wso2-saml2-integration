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
        $controller = [];
        $controllers = [];
        foreach (Route::getRoutes()->getRoutes() as $route) {
                // dd($route->getAction());
    		    $action = $route->getAction();

    		    if (array_key_exists('controller', $action))
    		    {
    		        $matches[] = explode('@', $action['controller']);
    		        // to separate the class name from the method
                    // $controller[$matches[0][0]] = $matches[0][1];
                    // array_push($controllers, $controller);
    		    }
    		    // dd($controllers);
    		}

        foreach ($matches as $controllermethod) {
            DB::table('actions')->insert([
                'controller_name' => $controllermethod[0],
                'method_name' => $controllermethod[1],
                'updated_at' => Carbon\Carbon::now(),
                'created_at' => Carbon\Carbon::now()
                ]);
        }
    	// factory(App\Action::class, 50)->create();
    }
}

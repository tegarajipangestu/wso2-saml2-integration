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
        DB::table('actions')->truncate();
        foreach (Route::getRoutes()->getRoutes() as $route) {
    		    $action = $route->getAction();
            $methods = $route->methods();
            $uri = $route->uri();
            $uri_regex = preg_replace('/(?:\/(?:{\w+}))/', '/(.*?)', $uri);
            // dd($uri);
    		    if (array_key_exists('controller', $action))
    		    {
                $match = explode('@', $action['controller']);
                $match[2] = $route->uri();
                $match[3] = $methods[0];
                $match[4] = $uri_regex;
    		        $matches[] = $match;
    		    }
    		}
        foreach ($matches as $controllermethod) {
            DB::table('actions')->insert([
                'controller_name' => $controllermethod[0],
                'method_name' => $controllermethod[1],
                'uri' => $controllermethod[2],
                'method_type' => $controllermethod[3],
                'uri_regex' => $controllermethod[4],
                'updated_at' => Carbon\Carbon::now(),
                'created_at' => Carbon\Carbon::now()
                ]);
        }
    	// factory(App\Action::class, 50)->create();
    }
}

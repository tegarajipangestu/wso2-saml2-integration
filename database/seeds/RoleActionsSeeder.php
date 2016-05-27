<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Action;

class RoleActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::where('name','=','tegarajipangestu')->first();
      $actions = Action::where('uri','like','users%')->get();
      foreach ($actions as $action) {
        DB::table('action_roles')->insert([
            'role_id' => 1,
            'action_id' => $action->id,
            'updated_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now()
            ]);
      }
    }
}

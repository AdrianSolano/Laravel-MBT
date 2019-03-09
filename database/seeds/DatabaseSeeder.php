<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();
        factory(App\Event::class, 5)->create();
        $tanks = factory(App\Tank::class, 20)->create();
        $ammo = factory(App\Ammo::class, 15)->create();

        $tanks->each(function(App\Tank $tanks) use ($ammo){
            $tanks->ammo()->attach(
                $ammo->random(random_int(1,3))
            );
        });
    }
}

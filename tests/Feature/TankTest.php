<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Tank;

class TankTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function check_if_tank_list_loads()
    {
        $response = $this->get('/tanks');

        $response->assertSeeText('More Info');
    }

    /** @test */
    public function check_if_a_guest_user_creates_a_tank()
    {
        $this->get('/tanks/create')
            ->assertRedirect('/login');
    }

    /** @test */
    public function check_if_a_user_can_load_create_tank_form()
    {
        $this->actingAs(factory('App\User')->create());

        $this->get('/tanks/create')
            ->assertOk()
            ->assertSee('Tank');
    }

    /** @test */
    public function a_user_creates_a_tank()
    {
        $this->actingAs(factory('App\User')->create());
        $tank = factory('App\Tank')->create();

        $this->post('/tanks', $tank->toArray());

        $this->assertDatabaseHas('tanks', [
            'name'         => $tank->name,
            'slug'          => $tank->slug,
            'description'   => $tank->description
        ]);
    }
}

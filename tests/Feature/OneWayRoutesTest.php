<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OneWayRoutesTest extends TestCase
{
    /** @test */
    public function checks_if_root_route_loads()
    {
        $this->get('/')
            ->assertStatus(200);
    }

    /** @test */
    public function checks_if_about_route_loads()
    {
        $this->get('/about')
            ->assertOk()
            ->assertSeeText('About');
    }
    
     /** @test */
     public function check_if_contact_route_need_login()
     {  
          $response =$this->get("/contact");
  
          $response->assertStatus(302);
     }
}

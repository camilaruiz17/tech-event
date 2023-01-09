<?php

namespace Tests\Feature;

use App\Models\Crime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDCrimeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

/*   public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    public function test_listCrimeAppearInHomeView(){
        $this->withExceptionHandling();

        $crimes = Crime::factory(2)->create();
        $crime = $crimes[0];
        
        $response = $this->get('/');

        $response->assertSee($crime->alertName);

        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    public function test_anCrimeCanBeDeleted(){
        $this->withExceptionHandling();

        $crime = Crime::factory()->create();
        $this->assertCount(1, Crime::all());

        $response = $this->delete(route('deleteCrime', $crime->id));
    
        $this->assertCount(0, Crime::all());

    }
    /* public function test_anCrimeCanBeCreated(){
        $this->withExceptionHandling();

        $response = $this->post(route('storeCrime', $crime->id),

    );}*/

}

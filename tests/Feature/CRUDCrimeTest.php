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

    public function test_aCrimeCanBeDeleted(){
        $this->withExceptionHandling();

        $crime = Crime::factory()->create();
        $this->assertCount(1, Crime::all());

        $response = $this->delete(route('deleteCrime', $crime->id));
    
        $this->assertCount(0, Crime::all());

    }
    public function test_aCrimeCanBeCreated(){
        $this->withExceptionHandling();

        $response = $this->post(route('storeCrime'),
        [
            'alertName' => 'alertName',
            'description' => 'description',
            'heroesRequired' => '10',
            'img' => 'img',
            'datetime'=> '2022-12-20 14:00:00',
        ]);

        $this->assertCount(1, Crime::all());

    }

    public function test_aCrimeCanBeUpdated(){
        $this->withExceptionHandling();

        $crime = Crime::factory()->create();
        $this->assertCount(1, Crime::all());

        $response = $this->patch(route('updateCrime', $crime->id), ['alertName' => 'New name']);
        $this->assertEquals('New name', Crime::first()->alertName);
    }


    public function test_aCrimeCanBeShown(){
        $this->withExceptionHandling();

        $crime=Crime::factory()->create();
        $this->assertCount(1,Crime::all());

        $response=$this->get(route('showCrime', $crime->id));

        $response->assertSee($crime->name);

        $response->assertStatus(200)->assertViewIs('showCrime');
    }

}

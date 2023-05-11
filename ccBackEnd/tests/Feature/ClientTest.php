<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function insert(){
        $response = $this->get('api/client');

        $response = $this->withHeaders(["X-Header" => "value"])
                    ->post("api/client", ["nom" => "unit", "numero" => 2934256, "ville" => "unit", "telephone" => 657489325,]);

        $response = $this->withHeaders(["X-Header" => "value"])
        ->delete("api/client/31");

        $client = new Client();
        $client = [
            "nom" => "Stephanie",
            "numero" => 3546271,
            "ville" => "Douala",
            "telephone" => 653493627
        ];
         $response = $this->withHeaders(["X-Header" => "value"])->patch('api/client/25', $client);
         $response->assertStatus(200);
    }
}

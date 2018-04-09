<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InterestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInterestRoute()
    {
      
      $response = $this->get('/interest');
      $response->assertStatus(200);
    }
}

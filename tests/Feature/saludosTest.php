<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class saludosTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_contenido(): void
    {
        $response = $this->view('/saludo');

        $response->assertSee("saludos");
    }
}

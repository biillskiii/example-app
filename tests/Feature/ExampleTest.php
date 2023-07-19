<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_homepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_keanggotaan(): void
    {
        $response = $this->get('/keanggotaan');

        $response->assertStatus(200);
    }
}
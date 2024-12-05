<?php

namespace Tests\Feature\categories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryMainTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIndex(): void
    {
        $response = $this->getjson('/test');

        $response->assertStatus(200);
        $response->assertJson([
            [
                'id'=>1,
                'category'=>'category_1',
                'name'=>'Seif',
            ],
            [
                'id'=>2,
                'category'=>'category_2',
                'name'=>'Mohamed',
            ],
            [
                'id'=>3,
                'category'=>'category_3',
                'name'=>'Ahmed',
            ],
        ]);
    }
}

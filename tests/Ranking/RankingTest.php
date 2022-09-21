<?php 

namespace Tests\Ranking;

use \Tests\TestCase;

class RankingTest extends TestCase
{
    public function testGetRankingWithRightMovementID()
    {

        $response = $this->get('/api/ranking/1');

        $response->assertStatus(200)
                ->assertJson([
                    'status' => true,
                ]);
    }

    public function testGetRankingWithWrongMovementID()
    {
        
        $response = $this->get('/api/ranking/bill');

        $response->assertStatus(400)
                    ->assertJson([
                        'status' => false,
                    ]);
    }

    public function testGetRankingWithoutMovementID()
    {
        
        $response = $this->get('/api/ranking/');

        
        $response->assertStatus(400)
                    ->assertJson([
                        'status' => false,
                    ]);
    }

    public function testGetRankingWithMethodPost()
    {
        
        $response = $this->post('/api/ranking/');

        $response->assertStatus(405);
    }

    public function testGetRankingWithMethodPut()
    {
        
        $response = $this->post('/api/ranking/');

        $response->assertStatus(405);
    }

    public function testGetRankingWithMethodDelete()
    {
        
        $response = $this->post('/api/ranking/');

        $response->assertStatus(405);
    }

}

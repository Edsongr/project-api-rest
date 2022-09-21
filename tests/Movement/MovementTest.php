<?php 

namespace Tests\Ranking;

use \Tests\TestCase;

class MovementTest extends TestCase
{

    public function testGetAllRegisterMovement()
    {

        $response = $this->get('/api/movement');
   
        $response->assertStatus(200)
                ->assertJson([ 
                    'status' => true 
                ]);
    }

    public function testGetRegisterMovementByID()
    {
        
        $response = $this->get('/api/movement/1');

        $response->assertStatus(200)
                    ->assertJson([
                        'status' => true,
                    ]);
    }

    public function testGetNonexistentRegisterMovement()
    {
        
        $response = $this->get('/api/movement/9999999');

        $response->assertStatus(400)
                    ->assertJson([
                        'status' => false,
                    ]);
    }
 
    public function testJustMessage()
    {
        
        /**
         * Mais testes seriam nessa linha, 
         * Incluindo do Delete
         * Além de testar com Verbos errados, seriam feitos mais testes para verificar se a estrutura do json está correto, 
         * ou com uma key esperada.
         */

        $this->assertTrue(true);
    }



}

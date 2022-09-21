<?php 

namespace App\Helper;

use \PHPUnit\Framework\TestCase;

class MessageSysTest extends TestCase
{
    use MessageSys;

    public function testDescriptionMessageErrorMovementID()
    {

        $this->assertEquals("NECESSÁRIO PASSAR UM ID DO MOVIMENTO!", $this->MOVEMENT_ERROR_ID);
    }

    public function testDescriptionMessageErrorMovementInvalidID()
    {
        
        $this->assertEquals("PASSE UM ID DE MOVIMENTO VÁLIDO!", $this->MOVEMENT_ERROR_INVALID_ID);
    }

    public function testDescriptionMessageSuccessCreatedRegister()
    {
        
        $this->assertEquals("REGISTRO CRIADO COM SUCESSO!", $this->SUCCESS_CREATED);
    }

    public function testDescriptionMessageSuccessUpdatedRegister()
    {
        
        $this->assertEquals("REGISTRO ATUALIZADO COM SUCESSO!", $this->SUCCESS_UPDATED);
    }

    public function testDescriptionMessageSuccessDeletedRegister()
    {
        
        $this->assertEquals("REGISTRO DELETADO COM SUCESSO!", $this->SUCCESS_DELETED);
    }

}

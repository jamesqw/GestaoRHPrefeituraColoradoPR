<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Empresa extends Entity
{
    protected function _getAtivado()
    {
        return $this->_properties['ativo'] ? 'Sim' : 'Não';
    }
}
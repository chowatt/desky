<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class _emptyTable extends BaseTable
{

    public function initialize(array $config): void
    {
        Parent::initialize($config);


    }
}

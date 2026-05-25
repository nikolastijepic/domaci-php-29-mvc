<?php

namespace PHP28\Models;
use PHP28\Helpers\TestHelper;

class User extends Db
{
    public function test()
    {
        $testHelper = new TestHelper();
        $testHelper->hello();
        echo "Hello World!";
    }
}
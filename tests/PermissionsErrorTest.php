<?php

namespace ThirtybeesStripe;

class PermissionErrorTest extends TestCase
{
    private function permissionErrorResponse()
    {
        return array(
            'error' => array(),
        );
    }

    /**
     * @expectedException ThirtybeesStripe\Error\Permission
     */
    public function testPermission()
    {
        $this->mockRequest('GET', '/v1/accounts/acct_DEF', array(), $this->permissionErrorResponse(), 403);
        Account::retrieve('acct_DEF');
    }
}

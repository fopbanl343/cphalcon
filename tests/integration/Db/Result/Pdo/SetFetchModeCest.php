<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Db\Result\Pdo;

use IntegrationTester;

class SetFetchModeCest
{
    /**
     * Tests Phalcon\Db\Result\Pdo :: setFetchMode()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbResultPdoSetFetchMode(IntegrationTester $I)
    {
        $I->wantToTest("Db\Result\Pdo - setFetchMode()");
        $I->skipTest("Need implementation");
    }
}
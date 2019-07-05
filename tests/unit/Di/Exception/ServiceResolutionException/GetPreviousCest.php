<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di\Exception\ServiceResolutionException;

use UnitTester;

class GetPreviousCest
{
    /**
     * Unit Tests Phalcon\Di\Exception\ServiceResolutionException ::
     * getPrevious()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-06-13
     */
    public function diExceptionServiceResolutionExceptionGetPrevious(UnitTester $I)
    {
        $I->wantToTest('Di\Exception\ServiceResolutionException - getPrevious()');

        $I->skipTest('Need implementation');
    }
}

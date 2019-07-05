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

namespace Phalcon\Test\Unit\Assets\Inline;

use Codeception\Example;
use Phalcon\Assets\Inline;
use UnitTester;

class GetAssetKeyCest
{
    /**
     * Tests Phalcon\Assets\Inline :: getAssetKey()
     *
     * @author       Phalcon Team <team@phalconphp.com>
     * @since        2018-11-13
     *
     * @dataProvider provider
     */
    public function assetsInlineGetAssetKey(UnitTester $I, Example $example)
    {
        $I->wantToTest('Assets\Inline - getAssetKey()');

        $asset = new Inline(
            $example['type'],
            $example['content']
        );

        $expected = md5(
            $example['type'] . ':' . $example['content']
        );

        $I->assertEquals(
            $expected,
            $asset->getAssetKey()
        );
    }

    protected function provider(): array
    {
        return [
            [
                'type'    => 'css',
                'content' => 'p {color: #000099}',
            ],
            [
                'type'    => 'js',
                'content' => '<script>alert("Hello");</script>',
            ],
        ];
    }
}

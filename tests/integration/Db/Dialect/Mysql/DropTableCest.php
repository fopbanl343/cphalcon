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

namespace Phalcon\Test\Integration\Db\Dialect\Mysql;

use Codeception\Example;
use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\DialectTrait;

class DropTableCest
{
    use DialectTrait;

    /**
     * Tests Phalcon\Db\Dialect\Mysql :: dropTable()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-25
     *
     * @dataProvider getDropTableFixtures
     */
    public function dbDialectMysqlDropTable(IntegrationTester $I, Example $example)
    {
        $I->wantToTest('Db\Dialect\Mysql - dropTable()');

        $schema   = $example[0];
        $ifExists = $example[1];
        $expected = $example[2];

        $dialect = $this->getDialectMysql();

        $actual = $dialect->dropTable('table', $schema, $ifExists);

        $I->assertEquals($expected, $actual);
    }

    protected function getDropTableFixtures(): array
    {
        return [
            [
                '',
                true,
                'DROP TABLE IF EXISTS `table`',
            ],
            [
                'schema',
                true,
                'DROP TABLE IF EXISTS `schema`.`table`',
            ],
            [
                '',
                false,
                'DROP TABLE `table`',
            ],
            [
                'schema',
                false,
                'DROP TABLE `schema`.`table`',
            ],
        ];
    }
}

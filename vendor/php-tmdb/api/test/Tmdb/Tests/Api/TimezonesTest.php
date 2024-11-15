<?php

/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 4.0.0
 */

namespace Tmdb\Tests\Api;

class TimezonesTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetTimezones()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $api->getTimezones();
        $this->assertLastRequestIsWithPathAndMethod('/3/timezones/list');
    }

    protected function getApiClass()
    {
        return 'Tmdb\Api\Timezones';
    }
}

<?php

namespace DreamedAtlas\Bundle\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class FrontControllerTest
 *
 * @package DreamedAtlas\Bundle\FrontBundle\Tests\Controller
 */
class FrontControllerTest extends WebTestCase
{
    /**
     * Test of the index action
     */
    public function testIndex()
    {
        $client = static::createClient();
        $router = static::$kernel->getContainer()->get('router');

        $crawler = $client->request('GET', $router->generate('home'));

        $this->assertCount(1, $crawler->filter('body:contains("Hello World!")'));
        $this->assertCount(1, $crawler->filter('title:contains("Hello World!")'));
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    /**
     * Test of an undefined action
     */
    public function testUndefinedAction()
    {
        $client = static::createClient();

        $client->request('GET', '/undefined-action/813168416');

        $this->assertTrue($client->getResponse()->isNotFound());
    }
}

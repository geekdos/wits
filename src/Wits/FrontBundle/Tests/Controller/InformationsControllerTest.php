<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InformationsControllerTest extends WebTestCase
{
    public function testInformations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/informations');
    }

    public function testVenue()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/venue');
    }

    public function testTravelingtoavenus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/travelingToAvenus');
    }

    public function testHotels()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hotels');
    }

}

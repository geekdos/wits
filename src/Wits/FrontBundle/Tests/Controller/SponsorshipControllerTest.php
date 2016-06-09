<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SponsorshipControllerTest extends WebTestCase
{
    public function testSponsorship()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sponsorship');
    }

}

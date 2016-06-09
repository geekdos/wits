<?php

namespace Wits\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommiteeControllerTest extends WebTestCase
{
    public function testHonorarycommitee()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/honoraryCommitee');
    }

    public function testOrganizincommitee()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/organizinCommitee');
    }

    public function testTechnicalprogramcommittee()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/technicalProgramCommittee');
    }

    public function testSteeringcommitteechairs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/steeringCommitteeChairs');
    }

    public function testGeneralchairs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/generalChairs');
    }

    public function testPublicityandcommunicationchairs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/publicityandCommunicationChairs');
    }

    public function testPosterschairs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/postersChairs');
    }

}

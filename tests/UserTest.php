<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    protected $baseUrl = 'http://localhost:8000';

    protected $clientsDetails = [
        'name'          => 'Nirvik Khanal',
        'gender'        => 'Male',
        'phone'         => '9843540435',
        'email'         => 'nirvik.khanal@gmail.com',
        'address'       => 'Kathmandu, Nepal',
        'nationality'   => 'Nepali',
        'date_of_birth' => '1992-01-07',
        'education'     => 'Engieering',
        'contact_mode'  => 'Email',
    ];

    /* @test */
    public function testClientsAddSection()
    {
        $this->cliPrint('Adding a new client to our system');

        $this->visit('/')
             ->click('Add New Data')
             ->seePageIs('/clients/create')
             ->see('Please fill in the form for client details.')
             ->submitForm('Submit', $this->clientsDetails)
             ->seePageIs('/')
             ->cliPrint('Completed.');
    }


    private function cliPrint($message)
    {
        echo PHP_EOL;
        print_r($message);
        echo PHP_EOL;
        
    }


}

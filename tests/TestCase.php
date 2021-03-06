<?php

use AbuseIO\Models\User;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    protected $userId = 1; // use the default admin user defined in the db seed

    public $user;

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

        $this->user = User::find($this->userId);

        return $app;
    }

}

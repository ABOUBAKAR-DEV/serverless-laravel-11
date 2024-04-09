<?php

namespace App;
use Bref\Context\Context;
use Illuminate\Support\Facades\DB;

class CustomCron implements \Bref\Event\Handler
{
    public function handle($event, Context $context)
    {
        echo 'Hello  world';
        $res= DB::table('users')->insert([
            'name' => 'Abk ',
            'email' => 'foumbot'.now(),
            'password'=>now()
        ]);
    }
}

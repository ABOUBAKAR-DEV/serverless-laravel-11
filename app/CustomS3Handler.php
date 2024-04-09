<?php

use Bref\Context\Context;
use Bref\Event\S3\S3Event;
use Bref\Event\S3\S3Handler;
use Illuminate\Support\Facades\DB;

class CustomS3Handler extends S3Handler
{
public function handleS3(S3Event $event, Context $context): void
    {
        $bucketName = $event->getRecords()[0]->getBucket()->getName();
        $fileName = $event->getRecords()[0]->getObject()->getKey();

        // do something with the file
            $res= DB::table('users')->insert([
                'name' => $fileName,
                'email' => $bucketName.now(),
                'password'=>now()
            ]);
    }
}

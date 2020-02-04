<?php
return [
    'completion_attachments' => [
        'driver' => 'local',
        'root' => public_path(implode(['tasks','uploads'],DIRECTORY_SEPARATOR)),
        'url' => env('APP_URL').'/tasks/uploads/',
        'visibility' => 'public',
    ]
];
<?php
return [
    'completion_attachments' => [
        'driver' => 'local',
        'root' => public_path('tasks\uploads'),
        'url' => env('APP_URL').'/tasks/uploads/',
        'visibility' => 'public',
    ]
];
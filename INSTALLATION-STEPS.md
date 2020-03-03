<b>Installation Steps</b>

<i>Install Laravel and Appframe and complete its settings. Then proceed to followings</i>

<ol>
<li>composer require milestone/task</li>
<li>php artisan vendor:publish --provider=Milestone\Task\TaskServiceProvider</li>
<li>php artisan migrate</li>
<li>php artisan db:seed --class=Milestone\Task\Seeder\DatabaseSeeder</li>
</ol>
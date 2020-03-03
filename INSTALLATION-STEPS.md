<b>Installation Steps</b>

<i>Install Laravel and Appframe and complete its settings. Then proceed to followings</i>

<ol>
<li>composer require milestone/task</li>
<li>If PHP is less than 7.2, Downgrade *symfony/translation* to 4.3.8 by adding `"symfony/translation": "4.3.8"` into composer require. And run `composer update`</li>
<li>php artisan vendor:publish --provider=Milestone\Task\TaskServiceProvider</li>
<li>php artisan migrate</li>
<li>php artisan db:seed --class=Milestone\Task\Seeder\DatabaseSeeder</li>
</ol>
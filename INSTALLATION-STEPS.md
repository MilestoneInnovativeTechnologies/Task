<b>Installation Steps</b>

<i>Install Laravel and Appframe and complete its settings. Then proceed to followings</i>

<ol>
<li>composer require milestone/task</li>
<li>If PHP is less than 7.2, Downgrade *symfony/translation* to 4.3.8 by adding `"symfony/translation": "4.3.8"` into composer require. And run `composer update`</li>
<li>php artisan vendor:publish --provider=Milestone\Task\TaskServiceProvider</li>
<li>Update appframe configs. index_route and logged_out_route to eui. Also update favicon,brand,title,description as desired</li>
<li>php artisan migrate</li>
<li>php artisan db:seed --class=Milestone\Task\Seeder\DatabaseSeeder</li>
</ol>

<b>Done, continue from adding setup user..</b>
<ol>
<li>Create Setup User</li>
<li>Using Setup user create Administrator</li>
<li>Using Administrator create Task Administrator</li>
</ol>
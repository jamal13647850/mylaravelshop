php artisan key:generate
php artisan make:model Article -m
php artisan migrate
php artisan make:controller Admin/panelController
npm i
npm run watch


composer require cviebrock/eloquent-sluggable:^4.5
php artisan make:controller Admin/ArticleController -r --model=article
php artisan rout:list
php artisan vendor:publish --provider="Cviebrock\EloquentSluggable\ServiceProvider"


php artisan migrate:refresh
php artisan make:request ArticleRequest
php artisan make:controller Admin/AdminController
composer require intervention/image


php artisan make:controller Admin/CourseController --model=Course
php artisan make:request CourseRequest


php artisan make:controller Admin/EpisodeController -r
php artisan make:request EpisodeRequest
php artisan migrate:refresh
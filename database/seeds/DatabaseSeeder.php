<?php

use Illuminate\Database\Seeder;
use App\Widget;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//      can use php artisan tinker
//      \App\Widget::truncate();
//      factory(‘App\Widget’, 30)->create();

    public function run()
    {
        Widget::unguard();
        Widget::truncate();
        factory(Widget::class, 30)->create();
        Widget::reguard();
    }
}

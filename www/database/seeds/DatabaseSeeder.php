<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResourceCategoryTableSeeder::class);
        factory(App\Http\Models\Site\Resource::class, 100)->create();
    }
}

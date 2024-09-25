<?php

use Illuminate\Database\Seeder;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systems = [
            ['key' => 'blog_name', 'value' => 'Gmiti Blog'],
            ['key' => 'motto', 'Bienvenido 。']
        ];
        DB::table('systems')->insert($systems);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeUserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all();
        $recipes = Recipe::all();

        foreach ($users as $user) {

            $user->recipes()->attach(
                $recipes->random(rand(1,10))->pluck('id')->toArray()
            );

        }

    }

}

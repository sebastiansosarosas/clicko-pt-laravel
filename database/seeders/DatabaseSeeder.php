<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test@clicko.es',
            'password'=> Hash::make('123456'),
        ]);


        User::factory()->create([
            'name' => 'Alberto Contreras',
            'email' => 'acon@gmail.com',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Barry White',
            'email'=> 'whitesing@outlook.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Camil Bosch',
            'email'=> 'cabosh@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Dan Smith',
            'email'=> 'dashie@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Emily Morris',
            'email' => 'emorr@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Faust Mondt',
            'email' => 'famon@clicko.es',
            'password'=> Hash::make('123456'),
        ]);


        User::factory()->create([
            'name' => 'Gary Indiana',
            'email' => 'garind@gmail.com',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Horace Mann',
            'email'=> 'horman@outlook.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Irene Zilch',
            'email'=> 'irezil@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'John Marston',
            'email' => 'jomars@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Karen Plast',
            'email' => 'kaplas@clicko.es',
            'password'=> Hash::make('123456'),
        ]);


        User::factory()->create([
            'name' => 'Lamar Davis',
            'email' => 'ladis@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Mario Finis',
            'email'=> 'mafin@outlook.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Norn Greyrat',
            'email'=> 'nogre@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Omar Hashi',
            'email' => 'omhas@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'Peter Quill',
            'email' => 'pequi@clicko.es',
            'password'=> Hash::make('123456'),
        ]);


        User::factory()->create([
            'name' => 'Quentin Beckfast',
            'email' => 'qubec@gmail.com',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Ross Jordan',
            'email'=> 'rojo@outlook.es',
            'password'=> Hash::make('123456'),
        ]);

        User::factory()->create([
            'name'=> 'Sarah Amour',
            'email'=> 'samus@clicko.es',
            'password'=> Hash::make('123456'),
        ]);

    }
}

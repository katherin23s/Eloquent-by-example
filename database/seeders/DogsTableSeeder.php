<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Dog::factory(50)->create();
  }
}
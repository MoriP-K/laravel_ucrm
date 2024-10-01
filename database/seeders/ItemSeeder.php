<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert([
				[
					'name' => 'cut',
					'memo' => 'cut detail',
					'price' => 6000,
				],
				[
					'name' => 'color',
					'memo' => 'color detail',
					'price' => 8000,
				],
				[
					'name' => 'perm',
					'memo' => 'perm detail (included cut)',
					'price' => 13000,
				],
			]);
    }
}

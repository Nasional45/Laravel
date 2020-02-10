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
        Eloquent::unguard();
        // $this->call(UsersTableSeeder::class);
        //  $this->call(BukuSeeder::class);
        //  $this->call(PeminjamanBukuSeeder::class);
        // $this->call(GajiSeeder::class);
        $this->call('SeederRelasi');
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('SeederRelasi berhasil.');
        
    }
}

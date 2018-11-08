<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('films')->insert([
          'name' => 'bohemian rhapsody',
          'genre' => 'Biography, Drama, Music',
          'duration' => '-',
          'director' => 'bryan singer',
      ]);

       DB::table('films')->insert([
          'name' => 'The nutcracker and the four realms',
          'genre' => 'adventure, family, fantasy',
          'duration' => '-',
          'director' => 'lasse hallstrom, joe johnston',
      ]);

       DB::table('films')->insert([
          'name' => 'a star is born',
          'genre' => 'Drama, Music, Musical',
          'duration' => '-',
          'director' => 'bradley cooper',
      ]);

       DB::table('films')->insert([
          'name' => 'mara',
          'genre' => 'crime, horror thriller',
          'duration' => '1j 38m',
          'director' => 'clive tonge',
      ]);

       DB::table('films')->insert([
          'name' => 'doraemon: great adventure',
          'genre' => 'animation, adventure, comedy',
          'duration' => '1j 40m',
          'director' => 'bryan singer',
      ]);

       DB::table('films')->insert([
          'name' => 'a man called ahok',
          'genre' => 'drama, biopic, family',
          'duration' => '-',
          'director' => 'putrama tuta',
      ]);

       DB::table('films')->insert([
          'name' => 'mara',
          'genre' => 'crime, horror thriller',
          'duration' => '1j 38m',
          'director' => 'clive tonge',
      ]);

       DB::table('films')->insert([
          'name' => 'a simple favor',
          'genre' => 'thriller',
          'duration' => '1j 59m',
          'director' => 'paul feiq',
      ]);

       DB::table('films')->insert([
          'name' => 'overlord',
          'genre' => 'action,horror,mystery',
          'duration' => '-',
          'director' => 'julius avery',
      ]);

       DB::table('films')->insert([
          'name' => 'hunter killer',
          'genre' => 'action, thriller',
          'duration' => '-',
          'director' => 'Denovan marsh',
      ]);

       DB::table('films')->insert([
          'name' => 'hanum & rangga (FAITH & THE CITY)',
          'genre' => 'drama',
          'duration' => '-',
          'director' => 'benny setiawan',
      ]);

       DB::table('films')->insert([
          'name' => 'dear nathan hello salma',
          'genre' => 'drama',
          'duration' => '-',
          'director' => 'indra gunawan',
      ]);

       DB::table('films')->insert([
          'name' => 'jaga pocong',
          'genre' => 'horror',
          'duration' => '-',
          'director' => 'hadrah daeng ratu',
      ]);
    }
}

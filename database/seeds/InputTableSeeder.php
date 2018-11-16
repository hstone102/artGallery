<?php

use Illuminate\Database\Seeder;

class InputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $first = new \App\Input;
      $first->user_id = '1';
      $first->name = 'Space Man';
      $first->title = 'Beautiful Stars';
      $first->post = "http://earthempaths.net/wp/wp-content/uploads/2016/06/star.jpg";
      $first->year = '2010';
      $first->description = 'A beautiful picture of a star in the galaxy';

      $first->save();
        //
    }
}

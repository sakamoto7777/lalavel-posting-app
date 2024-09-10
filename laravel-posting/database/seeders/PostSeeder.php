<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;


class PostSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // 5件の投稿データを作成
    Post::factory(5)->create();
  }
}

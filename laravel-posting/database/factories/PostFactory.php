<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */

  public function definition(): array
  {

    return [
      'title' => $this->faker->realText(20), // ランダムな日本語タイトル
      'content' => $this->faker->realText(200),   // ランダムな日本語本文
      'user_id' => User::factory(), // ユーザーが存在しない場合でも、新しいユーザーを作成
  ];

  }
}

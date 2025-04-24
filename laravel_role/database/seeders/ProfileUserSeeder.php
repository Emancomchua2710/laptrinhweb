<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class ProfileUserSeeder extends Seeder {
  public function run(): void {
    User::all()->each(function($user){
      $user->profile()->create([
        'bio'      => 'Bio của user '.$user->id,
        'avatar'   => null,
        'birthday' => now()->subYears(rand(18,40))->toDateString(),
      ]);
    });
  }
}

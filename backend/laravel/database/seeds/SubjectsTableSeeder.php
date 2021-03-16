<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::insert([
            ['label' => 'Japanese', 'name' => '国語', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'English', 'name' => '英語', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Math', 'name' => '数学', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Biology', 'name' => '生物学', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Chemistry', 'name' => '化学', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Physics', 'name' => '物理学', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Japanese-history', 'name' => '日本史', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'World-history', 'name' => '世界史', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Geography', 'name' => '地理', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Politics-and-economy', 'name' => '政治・経済', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Ethics', 'name' => '倫理', 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Others', 'name' => 'その他', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

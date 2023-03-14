<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class PostSeeder
 * This is the post seeder
 *
 * @category Seeder
 * @package  Database\Seeders
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius/
 */
class PostSeeder extends Seeder
{
    /**
     * This is the authors
     *
     * @var $authors User::class
     */
    protected $authors;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fetchRelations();

        foreach(range(1, 70) as $i) {
            $this->createRandomPosts();
        }
    }

    /**
     * This fetch Relations
     *
     * @return void
     */
    protected function fetchRelations()
    {
        $this->authors = User::all();
    }

    /**
     * This create random posts
     *
     * @return void
     */
    protected function createRandomPosts()
    {
        Post::factory()->create(
            [
                'author_id' => $this->authors->random()->id,
            ]
        );
    }
}

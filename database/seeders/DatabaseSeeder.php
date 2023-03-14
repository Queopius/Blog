<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Get the seeder classes array.
     *
     * @var array
     */
    private $seeders = [
        AuthorSeeder::class,
        PostSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateTables(
            [
                'posts',
                'users',
            ]
        );

        $progress = $this->command
            ->getOutput()
            ->createProgressBar(count($this->seeders));

        $progress->setMessage('Start');
        $progress->start();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder, true);
            $progress->setMessage('Task is in progress...');
            $progress->advance();
            $progress->setRedrawFrequency(100);
            $progress->minSecondsBetweenRedraws(0.1);
            $progress->maxSecondsBetweenRedraws(0.5);
        }
        $progress->finish();

        Model::reguard();
    }

    /**
     * Truncate the given tables.
     *
     * @param array $tables - array of tables
     *
     * @return void
     */
    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

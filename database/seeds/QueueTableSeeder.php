<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QueueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('queues')->insert([
            [
                'queueNum' => 1,
                'name' => 'a',
                'beds' => 1,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 1,
                'name' => 'b',
                'beds' => 2,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 1,
                'name' => 'c',
                'beds' => 3,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 1,
                'name' => 'd',
                'beds' => 4,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 1,
                'name' => 'e',
                'beds' => 5,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 1,
                'name' => 'f',
                'beds' => 6,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 2,
                'name' => 'a',
                'beds' => 1,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 3,
                'name' => 'a',
                'beds' => 1,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'queueNum' => 4,
                'name' => 'a',
                'beds' => 1,
                'start' => Carbon::now()->format('Y-m-d H:i:s'),
                'end' => Carbon::now()->format('Y-m-d H:i:s'),
                'userId' => 1,
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}

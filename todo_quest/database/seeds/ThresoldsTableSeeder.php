<?php

use Illuminate\Database\Seeder;
use App\Thresold;

class ThresoldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'level' => 2,
            'thresold' => 5
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
        $param = [
            'level' => 3,
            'thresold' => 10
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
        $param = [
            'level' => 4,
            'thresold' => 15
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
        $param = [
            'level' => 5,
            'thresold' => 20
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
        $param = [
            'level' => 6,
            'thresold' => 25
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
        $param = [
            'level' => 7,
            'thresold' => 30
        ];
        $thresold = new Thresold;
        $thresold->fill($param)->save();
    }
}

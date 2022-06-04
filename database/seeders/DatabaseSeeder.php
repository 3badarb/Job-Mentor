<?php

namespace Database\Seeders;

use App\Models\companyinfo;
use App\Models\companymodel2;
use App\Models\job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i=0;$i<10;$i++) {
            $u = \App\Models\userinfo::factory()->create();
            \App\Models\usermodel1::factory(['userinfo_id' => $u->id])->create();
            \App\Models\usermodel2::factory(['user_id' => $u->user_id])->create();

            $c=\App\Models\User::factory()->create(['tag'=>'C']);

            companyinfo::factory()->create(['user_id'=>$c->id]);
            $j=job::factory()->create(['user_id'=>$c->id]);
            companymodel2::factory()->create(['job_id'=>$j->id]);
        }


    }
}

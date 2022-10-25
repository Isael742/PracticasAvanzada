<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client -> name = "Isael";
        $client -> phone = "545363435";
        $client -> email = "isael@gmail.com";
        $client->save();

        $client = new Client();

        $client -> name = "Pancarcho";
        $client -> phone = "65327455";
        $client -> email = "pancarcho@gmail.com";
        $client->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservacion = new Reservation();

        $reservacion -> nombre = "Isael";
        $reservacion -> ciudad = "Los Barriles";
        $reservacion -> num_cuarto = "14";
        $reservacion -> num_personas = "2";
        $reservacion -> fecha_llegada = "26/Octubre/2022";
        $reservacion -> fecha_salida = "5/Noviembre/2022";
        $reservacion -> save();

        $reservacion = new Reservation();

        $reservacion -> nombre = "Pancarcho";
        $reservacion -> ciudad = "México";
        $reservacion -> num_cuarto = "26";
        $reservacion -> num_personas = "1";
        $reservacion -> fecha_llegada = "28/Octubre/2022";
        $reservacion -> fecha_salida = "10/Noviembre/2022";
        $reservacion -> save();

    }
}

<?php

use Illuminate\Database\Seeder;

class AddrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('addrs')->insert([
            'photo' => 'public/addr/AJevDAqbRtgYQuDt6pbHpg1unKEftafybZK2EFj1.jpeg',
            'city' => 'Porto Alegre',
            'addr' => 'AV WENCESLAU ESCOBAR, 1823 / SALA 207 / SHOPPING PASEO BAIRRO TRISTEZA',
            'whatsapp' => '51 98101 7323',
            'phone' => '51 3084 1601'
        ]);

        \Illuminate\Support\Facades\DB::table('addrs')->insert([
            'photo' => 'public/addr/4WbLIKvcUIRGue7Kn02zoIAm8llO9o98KqQtW1Ir.jpeg',
            'city' => 'Sapiranga',
            'addr' => 'AV JOÃO CORRÊA, 629 / SALA 301 / BAIRRO CENTRO',
            'whatsapp' => '51 98101 7323',
            'phone' => '51 3039 3505'
        ]);
    }
}

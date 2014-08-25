<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->call('SkrdTableSeeder');
    }

}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        $now   = new \Carbon\Carbon();

        User::create(
            array(
                'username'          => 'admin',
                'email'             => 'uyab.exe@gmail.com',
                'password'          => Hash::make('admin'),
                'confirmation_code' => '',
                'created_at'        => $now,
                'updated_at'        => $now,
            )
        );
    }

}

class SkrdTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('skrd')->truncate();

        $faker   = Faker\Factory::create();
        for($i=0;$i<100;$i++)
        {

            $now     = new \Carbon\Carbon();
            $njop    = $faker->numberBetween(100000000, 999999999);
            $nominal = $njop * 0.02;
            $total   = $nominal;

            \Buzz\Skrd\Skrd::create(
                array(
                    'nomor_urut'        => $faker->randomNumber(6),
                    'nama_retribusi'    => $faker->company,
                    'alamat_retribusi'  => $faker->address,
                    'jenis_retribusi'   => 'Retribusi Pengendalian Menara Telekomunikasi',
                    'alamat_obyek'      => $faker->address,
                    'nomor_obyek'       => $faker->ipv4,
                    'npwrd'             => '',
                    'tahun'             => date('Y'),
                    'njop'              => $njop,
                    'persen_retribusi'  => 2,
                    'nominal_retribusi' => $nominal,
                    'denda_retribusi'   => 0,
                    'total_retribusi'   => $total,
                    'jatuh_tempo'       => $faker->date('Y-m-d'),
                    'tanggal_surat'     => $faker->date('d F Y'),
                    'created_at'        => $now,
                    'updated_at'        => $now,
                )
            );
        }

    }

}
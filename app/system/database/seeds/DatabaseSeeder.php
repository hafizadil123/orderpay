<?php namespace System\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public static $siteName = 'OrderPay';

    public static $siteEmail = 'ahafiz167@gmail.com';

    public static $staffName = 'Order Pay Staff';

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $this->call([
            InitialSchemaSeeder::class,
            DemoSchemaSeeder::class,
            UpdateRecordsSeeder::class,
        ]);
    }
}

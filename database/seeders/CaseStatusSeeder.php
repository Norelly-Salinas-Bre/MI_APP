<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
//Hello, this is a placeholder for the CaseStatusSeeder class. You can implement the Logic to seed the case statuses in your database here. For example, you might want to create a few defalult case statuses like 'Open', 'Closed', 'Pending', etc. Here's a simple example:
    // use Iluminate\Support\Facades○2DB;
    // DB::table('case_statuses')-> insert([
    //   ['name' => 'Open']])
    //   ['name' => 'Closed'],
    //   ['name' => 'Pending'],
    // ]);
    // This will insert three case statuses into the 'case_statuses' table. Make sure to adjust the table name and fields according to your database schema. You can also use model factories if you have them set up for more complex seeding.
    // Remember to run the seeder using the command: php artisan db:seed --class_CaseStatusSeeder
    // You can also call this seeder from the DatabaseSeeder class to run it along with other seeders.
    // Don't forget to import the necessary classes at the top of your file, such as Illuminate\Support\Facades\DB if you're using the DB facade for direct database opertaions.
    // You can also use Eloquent models to create records if you have a CaseStatus model set up. For example:
        // use App\Models\CaseStatus;
        // CaseStatus::create(['name' => 'Open']);
        // CaseStatus::create(['name' => 'Closed']);
        // CaseStatus::create(['name' => 'Pending']);
        // This approach is more in Line with Laravel's Eloquent ORM and allows you to Leverage model relationships and other Eloquent features. Make sure to adjust the model nome and fields according to you application's structure.
        // You can also use factories to generate random data for your case statuses if you lave set up factories in your Laravel application. For example:
            // use App\Models\CaseStatus;
            // CaseStatus::factory()->count(10)->create();
            //This will create 10 random case statuses using the factory you have defined for the CaseStatus model. Make sure to define the factory with the necessary fields in your database/factories directory.
            // You can also use the '--force' option when running the seeder to force the seeding even if the database is not empty. This can be useful during
            // development or testing, but be cautious as it may overwwrite existing data. For example:
            // php artisan db:seed --class=CaseStatusSeeder --force
            //This will run the CaseStatusSeeder and force the seeding process, allowing you to quickly populate your database with default case statuses without worrying about existing data.
            // Make sure to test your seeder thoroughly to ensure it works as expected and does not cause any issues with your database. You can also use transactions to ensure that the seeding process is atomic and can be rolled back in case of any errors. For example:
                // use Illuminate\Support\Facades\DB;
                // DB::transaction(fuction () {})
                // {
                //   CaseStatus::create(['name' => 'Open']);
                //   CaseStatus::create(['name' => 'Closed']);
                //   CaseStatus::create(['name' => 'Pending']);
                // });
                // This will ensure that all the case statuses are created within a transaction, and if any error occurs, the entire transaction will be rolled back, Leaving your database in a consistent state. This is especially useful when seeding Large amounts of data or when you have complex relationships between models that need to be maintained during the seeding process.
                // You can also use the '--force' option with the transaction to ensure that the seeding process is forced even if the database is not empty. For example:
                    // php artisan db:seed --class=CaseStatusSeeder --force
                    // This will run the CaseStatusSeeder within a transaction and force the seeding process,
                    // allowing you to quickly populate your database with default case statuses without worrying about existing data.
                    // Make sure to test your seeder thoroughly to ensure it works as expected and does not cause any issues with your database. You can also use the '--pretend' option to simulate the seeding process without actually making any changes to the database. For example:
                    // php artisan db:seed --class=CaseStatusSeeder --pretend
                    // This will show you the SQL queries that would be executed during the seeding process without actually running them, allowing you to verify the seeding Logic before executing it. This can be useful for debugging and ensuring that your seeder works as expected without making any changes to your database.

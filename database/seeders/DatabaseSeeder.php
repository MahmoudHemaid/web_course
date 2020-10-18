<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Productline;
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
        Office::factory(10)->create();
        Employee::factory(5)->create(); // ReportsTo will be null for all of them
        Employee::factory(10)->create();
        Customer::factory(10)->create();
        Payment::factory(10)->create();
        Order::factory(10)->create();
        Productline::factory(10)->create();
        Product::factory(10)->create();
        Order_Product::factory(10)->create();
    }
}

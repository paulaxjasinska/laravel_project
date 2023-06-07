<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Procedure;
use App\Models\Customer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            // Tworzenie 5 klinik
            $clinics = Clinic::factory()->count(5)->create();

            // Tworzenie 5 użytkowników przypisanych do losowych klinik
            $users = User::factory()->count(5)->create([
                'clinic_id' => $clinics->random(),
            ]);

            // Tworzenie 5 zabiegów przypisanych do losowych klinik
            $procedures = Procedure::factory()->count(5)->create([
                'clinic_id' => $clinics->random(),
            ]);

            $customers = Customer::factory()->count(5)->create([
                'procedure_id' => $procedures->random(),
            ]);

            foreach ($customers as $customer) {
                $customer->procedure_price = $customer->procedure->price;
                $customer->save();
            }
        }
    }


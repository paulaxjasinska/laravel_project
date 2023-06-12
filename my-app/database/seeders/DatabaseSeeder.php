<?php

namespace Database\Seeders;

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
    public function run()
    {
        // Tworzenie 3 klinik
        $clinics = Clinic::factory()->count(3)->create();

        foreach ($clinics as $clinic) {
            // Tworzenie 2 lekarzy przypisanych do kliniki
            $users = User::factory()->count(2)->create([
                'clinic_id' => $clinic->id,
            ]);

            // Tworzenie 2 zabiegów przypisanych do kliniki
            $procedures = Procedure::factory()->count(2)->create([
                'clinic_id' => $clinic->id,
            ]);

            // Przypisywanie 2 klientów do pierwszych 3 zabiegów
            $procedureIds = $procedures->pluck('id')->take(3)->toArray();
            $customers = Customer::factory()->count(2)->create([
                'procedure_id' => function () use (&$procedureIds) {
                    return array_shift($procedureIds);
                },
            ]);

            // Aktualizacja ceny zabiegu dla przypisanych klientów
            foreach ($customers as $customer) {
                $customer->procedure_price = $customer->procedure->price;
                $customer->save();
            }
        }
    }
}


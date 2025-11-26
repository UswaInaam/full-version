<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name'            => 'Ahmed Raza',
                'profile_picture' => '',
                'email'           => 'ahmed.raza@example.com',
                'phone'           => '03001234567',
                'gender'          => 'male',
                'profession'      => 'Software Engineer',
                'status'          => 'active',
                'address'         => 'House #12, DHA Phase 3, Lahore',
            ],
            [
                'name'            => 'Ayesha Khan',
                'profile_picture' => '',
                'email'           => 'ayesha.khan@example.com',
                'phone'           => '03019876543',
                'gender'          => 'female',
                'profession'      => 'Graphic Designer',
                'status'          => 'active',
                'address'         => 'Street 8, I-10/2, Islamabad',
            ],
            [
                'name'            => 'Usman Ali',
                'profile_picture' => '',
                'email'           => 'usman.ali@example.com',
                'phone'           => '03225098765',
                'gender'          => 'male',
                'profession'      => 'Teacher',
                'status'          => 'active',
                'address'         => 'Near Cantt Market, Karachi',
            ],
            [
                'name'            => 'Fatima Noor',
                'profile_picture' => '',
                'email'           => 'fatima.noor@example.com',
                'phone'           => '03055678901',
                'gender'          => 'female',
                'profession'      => 'Fashion Designer',
                'status'          => 'inactive',
                'address'         => 'Garden Town, Lahore',
            ],
            [
                'name'            => 'Bilal Saeed',
                'profile_picture' => '',
                'email'           => 'bilal.saeed@example.com',
                'phone'           => '03317894561',
                'gender'          => 'male',
                'profession'      => 'Digital Marketer',
                'status'          => 'active',
                'address'         => 'Gulistan-e-Jauhar, Block 7, Karachi',
            ],
            [
                'name'            => 'Zainab Javed',
                'profile_picture' => '',
                'email'           => 'zainab.javed@example.com',
                'phone'           => '03142345678',
                'gender'          => 'female',
                'profession'      => 'Nurse',
                'status'          => 'active',
                'address'         => 'Satellite Town, Rawalpindi',
            ],
            [
                'name'            => 'Hamza Tariq',
                'profile_picture' => '',
                'email'           => 'hamza.tariq@example.com',
                'phone'           => '03094235670',
                'gender'          => 'male',
                'profession'      => 'Photographer',
                'status'          => 'inactive',
                'address'         => 'Model Town, Lahore',
            ],
            [
                'name'            => 'Sana Malik',
                'profile_picture' => '',
                'email'           => 'sana.malik@example.com',
                'phone'           => '03216789021',
                'gender'          => 'female',
                'profession'      => 'HR Manager',
                'status'          => 'active',
                'address'         => 'North Nazimabad, Block C, Karachi',
            ],
            [
                'name'            => 'Arslan Mehmood',
                'profile_picture' => '',
                'email'           => 'arslan.mehmood@example.com',
                'phone'           => '03004567890',
                'gender'          => 'male',
                'profession'      => 'Electrician',
                'status'          => 'active',
                'address'         => 'Peoples Colony, Faisalabad',
            ],
            [
                'name'            => 'Maryam Sultan',
                'profile_picture' => '',
                'email'           => 'maryam.sultan@example.com',
                'phone'           => '03335678943',
                'gender'          => 'female',
                'profession'      => 'Content Writer',
                'status'          => 'active',
                'address'         => 'Bahria Town, Rawalpindi',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingAddress;

class ShippingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $addresses = [
            [
                'user_id'     => 1,
                'full_name'   => 'Uswa Inam',
                'phone'       => '+92-300-1234561',
                'email'       => 'uswa1@example.com',
                'address'     => 'House 12, Main Street, Gulshan-e-Iqbal',
                'city'        => 'Karachi',
                'state'       => 'Sindh',
                'postal_code' => '75300',
                'country'     => 'Pakistan',
                'is_default'  => true,
            ],
            [
                'user_id'     => 2,
                'full_name'   => 'Ali Khan',
                'phone'       => '+92-300-1234562',
                'email'       => 'ali2@example.com',
                'address'     => 'Flat 5, Block B, DHA Phase 6',
                'city'        => 'Karachi',
                'state'       => 'Sindh',
                'postal_code' => '75500',
                'country'     => 'Pakistan',
                'is_default'  => true,
            ],
            [
                'user_id'     => 3,
                'full_name'   => 'Sara Ahmed',
                'phone'       => '+92-300-1234563',
                'email'       => 'sara3@example.com',
                'address'     => 'House 23, Street 10, Bahria Town',
                'city'        => 'Lahore',
                'state'       => 'Punjab',
                'postal_code' => '54000',
                'country'     => 'Pakistan',
                'is_default'  => true,
            ],
            [
                'user_id'     => 4,
                'full_name'   => 'Hassan Raza',
                'phone'       => '+92-300-1234564',
                'email'       => 'hassan4@example.com',
                'address'     => 'Apartment 8, Gulberg 3',
                'city'        => 'Lahore',
                'state'       => 'Punjab',
                'postal_code' => '54660',
                'country'     => 'Pakistan',
                'is_default'  => true,
            ],
            [
                'user_id'     => 5,
                'full_name'   => 'Fatima Noor',
                'phone'       => '+92-300-1234565',
                'email'       => 'fatima5@example.com',
                'address'     => 'House 45, F-7 Markaz',
                'city'        => 'Islamabad',
                'state'       => 'Islamabad Capital Territory',
                'postal_code' => '44000',
                'country'     => 'Pakistan',
                'is_default'  => true,
            ],
            [
                'user_id'     => 1,
                'full_name'   => 'Uswa Inam',
                'phone'       => '+92-300-1234561',
                'email'       => 'uswa1-alt@example.com',
                'address'     => 'Office 101, Tech Park, Clifton',
                'city'        => 'Karachi',
                'state'       => 'Sindh',
                'postal_code' => '75600',
                'country'     => 'Pakistan',
                'is_default'  => false,
            ],
            [
                'user_id'     => 2,
                'full_name'   => 'Ali Khan',
                'phone'       => '+92-300-1234562',
                'email'       => 'ali2-alt@example.com',
                'address'     => 'House 10, Sector F-10',
                'city'        => 'Islamabad',
                'state'       => 'Islamabad Capital Territory',
                'postal_code' => '44010',
                'country'     => 'Pakistan',
                'is_default'  => false,
            ],
            [
                'user_id'     => 3,
                'full_name'   => 'Sara Ahmed',
                'phone'       => '+92-300-1234563',
                'email'       => 'sara3-alt@example.com',
                'address'     => 'Flat 12, Askari 11',
                'city'        => 'Rawalpindi',
                'state'       => 'Punjab',
                'postal_code' => '46000',
                'country'     => 'Pakistan',
                'is_default'  => false,
            ],
            [
                'user_id'     => 4,
                'full_name'   => 'Hassan Raza',
                'phone'       => '+92-300-1234564',
                'email'       => 'hassan4-alt@example.com',
                'address'     => 'House 5, Gulshan-e-Ravi',
                'city'        => 'Lahore',
                'state'       => 'Punjab',
                'postal_code' => '54610',
                'country'     => 'Pakistan',
                'is_default'  => false,
            ],
            [
                'user_id'     => 5,
                'full_name'   => 'Fatima Noor',
                'phone'       => '+92-300-1234565',
                'email'       => 'fatima5-alt@example.com',
                'address'     => 'Office 9, Blue Area',
                'city'        => 'Islamabad',
                'state'       => 'Islamabad Capital Territory',
                'postal_code' => '44020',
                'country'     => 'Pakistan',
                'is_default'  => false,
            ],
        ];

        foreach ($addresses as $address) {
            ShippingAddress::create($address);
        }
    }
}

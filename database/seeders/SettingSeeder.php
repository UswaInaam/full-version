<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $settings = [
            [
                'key'   => 'site_name',
                'value' => 'Graphix Store',
            ],
            [
                'key'   => 'site_email',
                'value' => 'support@graphixstore.com',
            ],
            [
                'key'   => 'site_phone',
                'value' => '+92-300-1234567',
            ],
            [
                'key'   => 'site_address',
                'value' => '123 Main Street, Karachi, Pakistan',
            ],
            [
                'key'   => 'currency',
                'value' => 'PKR',
            ],
            [
                'key'   => 'timezone',
                'value' => 'Asia/Karachi',
            ],
            [
                'key'   => 'logo',
                'value' => 'settings/logo.png',
            ],
            [
                'key'   => 'favicon',
                'value' => 'settings/favicon.ico',
            ],
            [
                'key'   => 'default_language',
                'value' => 'en',
            ],
            [
                'key'   => 'maintenance_mode',
                'value' => 'off', // on/off
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}

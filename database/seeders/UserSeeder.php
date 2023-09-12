<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Contactinformation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password'),
        ]);

        Contact::create([
            'user_id'=>1,
            'phone'=>'01756787878',
            'address'=>'Address Test',
        ]);

        Contactinformation::create([
            'contact_id'=>1,
            'pincode'=>'44333',
            'near_by'=>'xyz-palace',
            'extra_details'=>'no more extra details',
        ]);
    }
}

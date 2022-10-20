<?php

namespace Database\Seeders;

use App\Models\Addressbook;
use App\Models\User;
use Illuminate\Database\Seeder;

class AddressbookSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $users->each(function (User $user){
            Addressbook::factory(['name' => sprintf('%s\'s addressbook', $user->name)])->for($user)->withContacts(100)->create();
        });

        Addressbook::factory(['name' => 'Global addressbook 1'])->withContacts(25)->create();
        Addressbook::factory(['name' => 'Global addressbook 2'])->withContacts(25)->create();
    }
}

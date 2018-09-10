<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
    	//Membuat Role Admin
        $adminRole = new Role;
        $adminRole->name ="admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
       // Membuat Role member
        $memberRole = new Role;
        $memberRole->name ="member";
        $memberRole->display_name = "Member";
        $memberRole->save();
    
       // Membuat sample user Admin
        $admin = new User;//
        $admin->name ="Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');//random
        $admin->save();
        $admin->attachRole($adminRole);//

       // Membuat Sample user member
        $member = new User;
        $member->name ="member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($member);



    }
}

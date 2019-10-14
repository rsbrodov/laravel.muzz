<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $adminRole = Role::where('name','admin')->first();//роль с названием админ
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        //создаем сиды
        $admin = User::create([
        	'name' => 'Ruslan',
        	'email' => 'rsbrodov@mail.ru',
        	'password' => bcrypt('24rs24rs')
        ]);

        $author = User::create([
        	'name' => 'author',
        	'email' => 'author@mail.ru',
        	'password' => bcrypt('author')
        ]);

        $user = User::create([
        	'name' => 'user',
        	'email' => 'user@mail.ru',
        	'password' => bcrypt('user')
        ]);
        //выстраиваем отношения что руслан администратор, автор-автор
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}

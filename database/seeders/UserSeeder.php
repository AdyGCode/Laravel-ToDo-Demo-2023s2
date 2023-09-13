<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $seedUsers = [
            [
                'name' => 'Ad Ministrator',
                'email' => 'ad.ministrator@example.com',
                'password' => 'Password1',
                'roles' => ['admin', 'member', 'staff'],
                'projects' => ['Admin Daily Jobs']
            ],
            [
                'name' => 'STUDENT_GIVEN_NAME',
                'email' => 'STUDENT_GIVEN_NAME@example.com',
                'email_verified_at' => now(),
                'password' => 'Secret1',
                'roles' => ['admin', 'staff', 'member'],
                'projects' => ['Portfolio of work', 'Major project', "Project 3"]
            ],
            [
                'name' => 'Annie Wun',
                'email' => 'annie.wun@example.com',
                'password' => 'Password1',
                'roles' => ['member'],
                'projects' => [],
            ],
            [
                'name' => 'Andy Mann',
                'email' => 'andy.mann@example.com',
                'password' => 'Password1',
                'roles' => ['staff', 'member'],
                'projects' => ['Project 1', 'Project 2', 'Project 3']
            ],
        ];

        foreach ($seedUsers as $newUser) {
            $newUser['password'] = Hash::make($newUser['password']);
            $user = User::create([
                'name' => $newUser['name'],
                'email' => $newUser['email'],
                'password' => $newUser['password'],
            ]);

            foreach ($newUser['projects'] as $project) {
                $newProject = Project::whereName($project)->first();

                if (is_null($newProject)) {
                    $newProject=Project::create(['name'=>$project,]);
                }

                $user->projects()->save($newProject);

            }

            //            foreach ($newUser['roles'] as $role) {
            //                $newRole = Role::whereName($role)->first();
            //                if (!is_null($newRole)) {
            //                    $permissions = Permission::pluck('id', 'id')->all();
            //                    $newRole->syncPermissions($permissions);
            //                    $user->assignRole([$newRole->id]);
            //                }
            //            }

        }

    }
}

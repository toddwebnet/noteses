<?php

use App\Models\Users;
use App\Models\NoteCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'jtodd',
                'password' => md5('password1')
            ],
            [
                'username' => 'user',
                'password' => md5('password2')
            ]
        ];

        $categories = [
            ['name' => 'Linux'],
            ['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'Misc'],
        ];

        $this->processData(Users::class, $users);
        $this->processData(NoteCategory::class, $categories);
    }

    private function processData($class, $items)
    {

        foreach ($items as $item) {
            $modelObject = $class::firstOrNew($item);
            foreach ($item as $key => $value) {
                $modelObject->{$key} = $value;
            }
            $modelObject->save();
        }
    }

}

<?php namespace Backend\Database\Seeds;

use Seeder;
use Backend\Models\User;
use Backend\Models\UserGroup;

class SeedSetupAdmin extends Seeder
{

    public static $email = 'admin@domain.tld';
    public static $login = 'admin';
    public static $password = 'admin';
    public static $firstName = 'Alessandro';
    public static $lastName = 'Traversi';
    public static $company = 'Atemporale';
    public static $profession = 'Webdesigner';
    public static $tag_name = 'Ale-Atemporale';

    public function setDefaults($values)
    {
        if (!is_array($values)) {
            return;
        }
        foreach ($values as $attribute => $value) {
            static::$$attribute = $value;
        }
    }

    public function run()
    {
        $group = UserGroup::create([
            'name' => 'Owners',
            'code' => UserGroup::DEFAULT_CODE,
            'description' => 'Default group for website owners.',
            'is_new_user_default' => false
        ]);

        $user = User::create([
            'email'                 => static::$email,
            'login'                 => static::$login,
            'password'              => static::$password,
            'password_confirmation' => static::$password,
            'first_name'            => static::$firstName,
            'last_name'             => static::$lastName,
            'company'               => static::$company,
            'profession'            => static::$profession,
            'tag_name'              => static::$tag_name,
            'permissions'           => [],
            'is_superuser'         => true,
            'is_activated'          => true
        ]);

        $user->addGroup($group);
    }

}

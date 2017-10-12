<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomizeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $bindArr = [
            'App\Repositories\Level\LevelRepositoryInterface' => 'App\Repositories\Level\LevelRepository',
            'App\Repositories\AdminAccount\AdminAccountRepositoryInterface' => 'App\Repositories\AdminAccount\AdminAccountRepository',
            'App\Repositories\Year\YearRepositoryInterface' => 'App\Repositories\Year\YearRepository',
            'App\Repositories\Faculty\FacultyRepositoryInterface' => 'App\Repositories\Faculty\FacultyRepository',
            'App\Repositories\StudentClass\StudentClassRepositoryInterface' => 'App\Repositories\StudentClass\StudentClassRepository',
            'App\Repositories\Teacher\TeacherRepositoryInterface' => 'App\Repositories\Teacher\TeacherRepository',
            'App\Repositories\Role\RoleRepositoryInterface' => 'App\Repositories\Role\RoleRepository',
            'App\Repositories\Student\StudentRepositoryInterface' => 'App\Repositories\Student\StudentRepository',
            
        ];

        foreach ($bindArr as $key => $value) {
            $this->app->bind(
                $key, $value
            );
        }
    }
}

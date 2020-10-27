<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text',['name','value' => null, 'attibutes' => []]);
        Form::component('textarea', 'components.form.textarea',['name','value' => null, 'attibutes' => []]);
        Form::component('submit', 'components.form.submit',['value' => 'Submit', 'attibutes' => []]);
        Form::component('hidden', 'components.form.hidden',['name','value' => null, 'attibutes' => []]);
        Form::component('file', 'components.form.file',['name', 'attibutes' => []]);
    }
}

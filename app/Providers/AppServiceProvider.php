                                                                    <?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UpperCaseService;
use App\AllUppercaseService;
use App\Converter;
use App\Addition;
use App\Division;
use App\Minus;
use App\Multiply;
use App\Operator;
use App\English;
use App\Vietnames;
use App\Greeter;
use App\Greet;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */ 
    public function register()
    {
        $this->app->bind(Converter::class, function()
        {
            if($this->app['config']->get('app.converter'))
            {
                return new UpperCaseService();
            }

            return new AllUppercaseService();
        });
        $this->app->bind(Operator::class,function()
            {
                if($this->app['config']->get('app.operator') == '+')
                {
                    return new Addition();
                }
                if($this->app['config']->get('app.operator') == '/')
                {
                    return new Division();
                }
                if($this->app['config']->get('app.operator') == '-')
                {
                    return new Minus();
                }
                if($this->app['config']->get('app.operator') == '*')
                {
                    return new Multiply();
                }
            });
        $this->app->bind(Greet::class,function()
            {
                $converter = config('app.converter')?

                new UpperCaseService():
                new AllUppercaseService();

                $Greet = config('app.greet' == 'vi')?

                new Vietnames():
                new English();

                return new Greet($converter,$Greet);

            });
    }
}

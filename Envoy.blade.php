@servers(['web' => 'pi@192.168.1.22 -p 222'])
{{--@servers(['web' => 'pi@dyn.raspberrydemontbeliard.ovh -p 222'])--}}

@setup
    $dir="/home/pi/ideocompositeur";
@endsetup

@task('pull')
    cd {{$dir}};
    git reset --hard;
    git pull;
    sudo chmod 777 public -R;
    sudo chmod 777 storage -R;
    {{--php artisan migrate;--}}
@endtask

@task('composer')
    composer update --no-dev --no-progress;
@endtask

@task('cache')
    php artisan config:cache;
    php artisan route:cache;
@endtask

@macro('deploy')
    pull
    cache
@endmacro

@macro('deploy-update')
    pull
    composer
    cache
@endmacro

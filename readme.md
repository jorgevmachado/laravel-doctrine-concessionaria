<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Instalando o Laravel 

    composer create-project --prefer-dist laravel/laravel project-name
    
<p align="center"><img height="80" src="https://www.laraveldoctrine.org/img/laravel-doctrine-logo.png"><b>Laravel-Doctrine</b></p>

# Instalando o Doctrine-ORM

    composer require laravel-doctrine/orm
    
https://www.laraveldoctrine.org/    
 # Instalando Tactician-doctrine 
    
    composer require league/tactician-doctrine
     
 https://tactician.thephpleague.com/
 
 # Instalando o Laravel-doctrine-serializer 
 
    composer require tttptd/laravel-doctrine-serializer

https://github.com/tttptd/laravel-doctrine-serializer

# Instruções de Configurações 


Adicionar  no  <b>config/app.php</b> dentro de <b>'providers' => []</b> ao final

    LaravelDoctrine\ORM\DoctrineServiceProvider::class,
    Tttptd\Serializer\SerializerServiceProvider::class,
    
Adicionar  no  <b>config/app.php</b> dentro de <b>'aliases' => []</b> ao final
    
    'EntityManager' => LaravelDoctrine\ORM\Facades\EntityManager::class,
    'Registry'      => LaravelDoctrine\ORM\Facades\Registry::class,
    'Doctrine'      => LaravelDoctrine\ORM\Facades\Doctrine::class,

Depois usar o seguinte comando: 

    php artisan vendor:publish --tag="config"

# Criação do Provider Repository Service Provider

Dentro da pasta <b>app</b> criar uma pasta chamada <b>Repository</b> e outra chamada <b>RepositoryFilter</b>
Dentro da pasta <b>app/Providers</b> criar  o <b>RepositoryServiceProvider.php</b> dentro dele vai ficar o seguinte codigo:

    <?php
    
    namespace App\Providers;
    
    use Doctrine\ORM\EntityManager;
    use Illuminate\Support\ServiceProvider;
    use Symfony\Component\Finder\Finder;
    
    class RepositoryServiceProvider extends ServiceProvider
    {
        /** @var EntityManager */
        protected $em;
    
        /** @return void */
        public function boot() { }
    
        /** Register the application services.
         * @return void
         */
        public function register()
        {
            $finder = new Finder();
            $finder->files()->in(realpath(__DIR__ . '/../Repository'));
            foreach ($finder as $file) {
                $entityName = str_replace('Repository.php', '', $file->getFilename());
                $entityClassName = 'App\\Entity\\' . $entityName;
                $this->app->bind(
                    'App\Repository\\' . $entityName . 'Repository',
                    function () use ($entityClassName) {
                        return \EntityManager::getRepository($entityClassName);
                    }
                );
            }
        }
    }
Depois Adicionar  no  <b>config/app.php</b> dentro de <b>'providers' => []</b>

     App\Providers\RepositoryServiceProvider::class,

Depois usar o seguinte comando: 

    php artisan vendor:publish --tag="config"
    
    
# Comandos basicos 

Para criar a tabela no banco de dados 

    php artisan doctrine:schema:create
    
Para Criar as Seeds no Banco de dados

    php artisan db:seed
    
Para Recarregar o projeto

    composer dump-autoload
    
    
#Versoes

<h2>PHP</h2> 

    PHP 7.0.32-0ubuntu0.16.04.1 (cli) ( NTS )
    Copyright (c) 1997-2017 The PHP Group
    Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
        with Zend OPcache v7.0.32-0ubuntu0.16.04.1, Copyright (c) 1999-2017, by Zend Technologies


<h2>DOCKER</h2>

    Docker version 17.05.0-ce, build 89658be

<h2>DOCKER-COMPOSE</h2>

    docker-compose version 1.18.0, build 8dd22a9

<h2>COMPOSER</h2>

    Composer version 1.7.2 2018-08-16 16:57:12

<h2>LARAVEL</h2>

    LARAVEL 5,7
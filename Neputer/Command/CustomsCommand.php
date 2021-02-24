<?php

namespace Neputer\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CustomsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'neputer:generate {CLASS_NAME}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create Model, Controller, View, Services ';
    protected $fileManager;
    protected $config;


    public function __construct()
    {
        if (!file_exists('Neputer/AdminController'))
            mkdir(base_path('Neputer/AdminController'));

        if(!file_exists('Neputer/Entities'))
            mkdir(base_path('Neputer/Entities'));

        if(!file_exists('Neputer/Foundation/Services'))
            mkdir(base_path('Neputer/Foundation/Services'));



        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->Check();
    }
    public function Check()
    {
        $class_name  = strtolower($this->argument('CLASS_NAME'));
        $this->makeController($class_name);
        $this->info(ucfirst($class_name).' Controller Created');
    }

    private function makeController(string $class_name)
    {
        $controllerString = file_get_contents(base_path('Neputer/Foundation/Mixing/controller.create.stub'));
        $controllerString = str_replace(["{{ Controller }}","{{ Model }}"], ucfirst($class_name),  $controllerString);
        File::put(base_path('Neputer'. DIRECTORY_SEPARATOR .'AdminController' . DIRECTORY_SEPARATOR . ucfirst($class_name) . 'Controller.php'), $controllerString);
        $this->info(ucfirst($class_name) . 'Controller Created .');
    }
}

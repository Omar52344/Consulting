<?php

namespace App\Console\Commands;

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Console\Command;

class crearRegistro extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:registro';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command descriptionlñl{l{ñl{ñl{ñllñ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $product= new ProductController;
        
        $product->calendario();

        
    }
}

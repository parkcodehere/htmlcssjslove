<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Config;

class Build extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build site';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('deploying...');

        $output = 'output';

        $key = 'htmlcssjslove-php';

        if (!is_dir($output)) {
          $this->error('please setup output manually! exiting ...');
          die;
        }

        if (is_dir($output.'/hts-cache')) {
          $this->warn('removing files...');

          $this->deleteDirectory($output.'/hts-cache');
          unlink($output.'/index.html');

          $continues = [
            '.', '..', '.git', '.gitignore', 'README.md',
            'pages',
          ];
          foreach (scandir($output.'/'.$key) as $item) {
            if (in_array($item, $continues)) {
              continue;
            }
            if (!$this->deleteDirectory($output.'/'.$key.'/'.$item)) {
              return false;
            }
          }
        }
        
        chdir($output);

        $site = 'http://'.$key.'/';

        $this->info("httrack-ing $site, please wait ...");
        exec("httrack $site");

        $this->info("success!");
    }

    function deleteDirectory($dir) {
      if (!file_exists($dir)) {
        return true;
      }
      if (!is_dir($dir)) {
        return unlink($dir);
      }
      foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
          continue;
        }
        if (!$this->deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
          return false;
        }
      }
      return rmdir($dir);
    }
}

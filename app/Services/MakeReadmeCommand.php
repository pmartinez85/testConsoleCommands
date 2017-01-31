<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 31/01/17
 * Time: 21:31
 */

namespace App\Services;


use Illuminate\Filesystem\Filesystem;

class MakeReadmeCommand
{

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;

    }


    public function create()
    {
        dump("file readme created");
        $this->filesystem->copy(__DIR__ . 'stubs/MyReadme.md', base_path('MyReadme.md'));

    }

}
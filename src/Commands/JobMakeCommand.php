<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class JobMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:job';

    /**
     * @var string
     */
    protected $description = 'Make a new job class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'./stubs/Job.stub';
    }

    protected function getRootNamespace($namespace)
    {
        return $namespace.'\Jobs';
    }
}

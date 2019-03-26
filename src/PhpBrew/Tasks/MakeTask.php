<?php

namespace PhpBrew\Tasks;

use PhpBrew\Buildable;
use PhpBrew\Utils;

/**
 * Task to run `make clean`.
 */
class MakeTask extends BaseTask
{
    private $buildLogPath;
    private $isQuiet = false;

    public function run(Buildable $build)
    {
        return $this->make($build->getSourceDirectory(), 'all', $build);
    }

    public function install(Buildable $build)
    {
        return $this->make($build->getSourceDirectory(), 'install', $build);
    }

    public function clean(Buildable $build)
    {
        return $this->make($build->getSourceDirectory(), 'clean', $build);
    }

    public function setBuildLogPath($buildLogPath)
    {
        $this->buildLogPath = $buildLogPath;
    }

    public function setQuiet()
    {
        $this->isQuiet = true;
    }

    public function isQuiet()
    {
        return $this->isQuiet;
    }

    


    /**
     * @param Buildable $build can be PeclExtension or Build object.
     */
    
}

<?php
/**
 * This file is part of the Loops framework.
 *
 * @author Lukas <lukas@loopsframework.com>
 * @license https://raw.githubusercontent.com/loopsframework/glue/master/LICENSE
 * @link https://github.com/loopsframework/base
 * @link https://loopsframework.com/
 * @package extra
 * @version dev-master
 */

namespace Loops\Service;

use Docker\Docker;
use Docker\DockerClient;
use Loops;
use Loops\ArrayObject;
use Loops\Service;

class Dockerphp extends Service {
    protected static $dependencies = [ "Docker\Docker" ];
    
    public static function getService(ArrayObject $config, Loops $loops) {
        if($options = $config->toArray()) {
            return new Docker(new DockerClient($options));
        }
        
        return new Docker;
    }
}
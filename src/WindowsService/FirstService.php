<?php
/**
 * @copy Win32Service (c) 2019
 * Added by : cameleon at 25/02/19 17:51
 */
namespace App\WindowsService;
use \Win32Service\Model\AbstractServiceRunner;
/**
 * Class FirstService
 *
 */
class FirstService extends AbstractServiceRunner
{
    protected function run(int $control): void
    {
        //TODO : Put your code here, the running time of this method must do not exceed 30s.
        usleep(500);
    }

    protected function setup(): void
    {
        // TODO: Implement setup() method.
    }

    protected function beforePause(): void
    {
        // TODO: Implement beforePause() method.
    }

    protected function beforeContinue(): void
    {
        // TODO: Implement beforeContinue() method.
    }

    protected function beforeStop(): void
    {
        // TODO: Implement beforeStop() method.
    }

    protected function lastRunIsTooSlow(float $duration): void
    {
        // TODO: Implement lastRunIsTooSlow() method.
    }

}

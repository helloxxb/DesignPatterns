<?php

namespace Behavioral\State\Example3;

/**
 * 晚上时间 18 ~ 24
 */
class GoodNight implements State
{
    public function proceedToNext(WorkContext $work): string
    {
        return '你好，晚上';
    }
}

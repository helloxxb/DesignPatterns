<?php

namespace Behavioral\State\Example3;

/**
 * 下午时间 12 ~ 18
 */
class GoodAfternoon implements State
{
    public function proceedToNext(WorkContext $work): string
    {
        if ($work->hour < 18) {
            return '你好，下午';
        } else {
            $work->setState(new GoodNight());
            return $work->proceedToNext();
        }
    }
}

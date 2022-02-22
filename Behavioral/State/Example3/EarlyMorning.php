<?php

namespace Behavioral\State\Example3;

/**
 * 凌晨时间 0 ~ 6
 */
class EarlyMorning implements State
{
    public function proceedToNext(WorkContext $work): string
    {
        if ($work->hour < 6) {
            return '你好，凌晨';
        } else {
            $work->setState(new GoodForenoon());
            return $work->proceedToNext();
        }
    }
}

<?php

namespace Behavioral\State\Example3;

/**
 * 中午时间 12
 */
class GoodNoon implements State
{
    public function proceedToNext(WorkContext $work): string
    {
        if ($work->hour == 12) {
            return '你好，中午';
        } else {
            $work->setState(new GoodAfternoon());
            return $work->proceedToNext();
        }
    }
}

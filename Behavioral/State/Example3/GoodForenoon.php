<?php

namespace Behavioral\State\Example3;

/**
 * 上午时间 6 ~ 11
 */
class GoodForenoon implements State
{
    public function proceedToNext(WorkContext $work): string
    {
        if ($work->hour < 12) {
            return '你好，上午';
        } else {
            $work->setState(new GoodNoon());
            return $work->proceedToNext();
        }
    }
}

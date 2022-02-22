<?php

namespace Behavioral\State\Example3;

/**
 * 状态接口
 */
interface State
{
    /**
     * @param WorkContext $work
     * @return string
     */
    public function proceedToNext(WorkContext $work): string;
}

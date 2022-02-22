<?php

namespace Behavioral\State\Example3;

/**
 * 工作状态
 */
class WorkContext
{
    public int $hour;

    /**
     * @var State $current
     */
    private $current;

    public function __construct()
    {
        $this->hour = intval(date('H', time()));
        $this->current = new EarlyMorning();
    }
    
    /**
     * 设置状态
     *
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function proceedToNext(): string
    {
        return $this->current->proceedToNext($this);
    }
}

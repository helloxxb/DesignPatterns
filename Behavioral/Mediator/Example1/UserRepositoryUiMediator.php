<?php

namespace Behavioral\Mediator\Example1;

/**
 * UserRepositoryUiMediator
 *
 * @package Behavioral\Mediator\Example1
 */
class UserRepositoryUiMediator implements Mediator
{
    private UserRepository $userRepository;
    private Ui $ui;
    
    /**
     * UserRepositoryUiMediator constructor.
     * @param UserRepository $userRepository
     * @param Ui $ui
     */
    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;
        
        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }
    
    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }
    
    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}

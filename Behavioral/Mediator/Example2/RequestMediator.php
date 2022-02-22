<?php

namespace Behavioral\Mediator\Example2;

use Behavioral\Mediator\Example2\Subsystem\Client;
use Behavioral\Mediator\Example2\Subsystem\Database;
use Behavioral\Mediator\Example2\Subsystem\Server;

/**
 * RequestMediator
 *
 * @package Behavioral\Mediator\Example2
 */
class RequestMediator implements Mediator
{
    private Server $server;
    private Database $database;
    private Client $client;
    
    /**
     * Mediator constructor.
     * @param Server $server
     * @param Database $database
     * @param Client $client
     */
    public function __construct(Server $server, Database $database, Client $client)
    {
        $this->server = $server;
        $this->database = $database;
        $this->client = $client;
        
        $this->server->setMediator($this);
        $this->database->setMediator($this);
        $this->client->setMediator($this);
    }
    
    /**
     * @inheritDoc
     */
    public function makeRequest(): void
    {
        $this->server->process();
    }
    
    /**
     * @inheritDoc
     */
    public function queryDb(): string
    {
        return $this->database->getData();
    }
    
    /**
     * @inheritDoc
     */
    public function sendResponse(string $content): void
    {
        $this->client->output($content);
    }
}

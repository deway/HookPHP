<?php
namespace Hook\Db;

use Hook\Cache\Cache;

class MongoConnect extends Cache
{
    public $handle;
    
    public function __construct(string $db = '')
    {
        $db = $db ? $db : 'default';
        $this->handle = new \MongoDB\Client(
            APP_CONFIG['mongo'][$db]['uri'],
            APP_CONFIG['mongo'][$db]['uriOptions'],
            APP_CONFIG['mongo'][$db]['driverOptions']
        );
    }   
}
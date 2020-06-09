<?php


namespace Database;

use PDO;

class DatabaseContext
{
    private DatabaseContext $singletonInstance;
    private DatabaseConfig $config;
    private PDO $pdo;
    public function __construct()
    {
        $this->config = new DatabaseConfig();

    }
    
    public static function getInstance() : DatabaseContext
    {
        if (self::getInstance() == null)
        {
            self::$singletonInstance =  new DatabaseContext();
            
        }
        return self::getInstance();
    }

    /**
     * Get the value of host
     */ 
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */ 
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

        /**
         * Get the value of port
         */ 
        public function getPort()
        {
                return $this->port;
        }

        /**
         * Set the value of port
         *
         * @return  self
         */ 
        public function setPort($port)
        {
                $this->port = $port;

                return $this;
        }

        /**
         * Get the value of username
         */ 
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
}
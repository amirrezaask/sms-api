<?php

namespace Database;

class DatabaseConfig 
{
    private string $host;
    private string $port;
    private string $username;
    private string $password;
    private string $dbname;
    
    public function __construct()
    {
        $this->host = getenv("MYSQL_HOST") ?? "localhost";
        $this->port = getenv("MYSQL_PORT") ?? "3306";
        $this->username = getenv("MYSQL_USERNAME") ?? "root";
        $this->port = getenv("MYSQL_PASSWORD") ?? "";   
        $this->dbname = getenv("MYSQL_NAME") ?? "SMSLog";
    }
    public function DSN(): string 
    {
        return "mysql://host=$this->host:$this->port;dbname=$this->dbname";
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
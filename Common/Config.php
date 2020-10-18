<?php


namespace Common;


class Config implements \ArrayAccess
{
    protected $path;
    protected $config = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function offsetGet($offset)
    {
        if (!isset($this->config[$offset])) {
            $filePath = $this->path . '/' . $offset . '.php';
            $res = require $filePath;
            $this->config[$offset] = $res;
        }

        return $this->config[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
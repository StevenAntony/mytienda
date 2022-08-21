<?php

class Model
{
    protected $code;

    public function getCode():int
    {
        return $this->code;
    }
    
    public function setCode(int $code)
    {
        $this->code = $code;
        
        return $this;
    }
}

<?php
namespace App\Modules;

class ValidarHeader
{
    /**
     * Token para el acceso de la pataforma.
     * 
     * @var string
     */
    private $CodeToken;

    public function validarToken(string $idAuth)
    {
        $token = explode(' ',$this->getCodeToken());
        if (isset($token[1])) {
            return $idAuth === $token[1];
        }
        return false;
    }

    /**
     * Get token para el acceso de la pataforma.
     *
     * @return  string
     */ 
    public function getCodeToken()
    {
        return $this->CodeToken;
    }

    /**
     * Set token para el acceso de la pataforma.
     *
     * @param  string  $CodeToken  Token para el acceso de la pataforma.
     *
     * @return  self
     */ 
    public function setCodeToken(string $CodeToken)
    {
        $this->CodeToken = $CodeToken;

        return $this;
    }
}
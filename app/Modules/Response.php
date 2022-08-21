<?php
namespace App\Modules;

class Response
{
    /**
     * Codigo de respuesta 200 todo Ok.
     *
     * @var integer
     */
    private $Codigo = 0;

    /**
     * Informacion de lo solicitado por el cliente.
     *
     * @var object
     */
    private $Datos = [];

    /**
     * Mensaje del servidor sobre la solicitud.
     *
     * @var string
     */
    private $Mensaje = '';

    /**
     * Id del error almacenada en BD.
     *
     * @var string
     */
    private $IdError = "";

    /**
     * Descripcion del error.
     *
     * @var string|Throwable
     */
    private $MensajeError = '';

    /**
     * 
     *
     * @var array
     */
    private $Header;   
    
    /**
     * Si muestra mensaje de error del cath
     * 
     * @var bool
     */
    private $Debug;

    function __construct()
    {
        $this->Debug = config('app.debug');
    } 

    public function send()
    {
        
        $this->MensajeError =$this->Debug && $this->Codigo == 500 ? $this->MensajeError : ($this->Codigo == 500 ? 'Error en el servicio' : $this->MensajeError);
        return [
            'code'    => $this->getCodigo(),
            'message'   => $this->getMensaje(),
            'data'     => $this->getDatos(),
            'error'     => [
                'Id'        => $this->getIdError(),
                'message'   => $this->getMensajeError()
            ]
        ];
    }

    /**
     * Get mensaje del servidor sobre la solicitud.
     *
     * @return  string
     */ 
    public function getMensaje()
    {
        return $this->Mensaje;
    }

    /**
     * Set mensaje del servidor sobre la solicitud.
     *
     * @param  string  $Mensaje  Mensaje del servidor sobre la solicitud.
     *
     * @return  self
     */ 
    public function setMensaje(string $Mensaje)
    {
        $this->Mensaje = $Mensaje;

        return $this;
    }

    /**
     * Get codigo de respuesta 200 todo Ok.
     *
     * @return  integer
     */ 
    public function getCodigo()
    {
        return $this->Codigo;
    }

    /**
     * Set codigo de respuesta 200 todo Ok.
     *
     * @param  integer  $Codigo  Codigo de respuesta 200 todo Ok.
     *
     * @return  self
     */ 
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    /**
     * Get informacion de lo solicitado por el cliente.
     *
     * @return  object
     */ 
    public function getDatos()
    {
        return $this->Datos;
    }

    /**
     * Set informacion de lo solicitado por el cliente.
     *
     * @param  object|array  $Datos  Informacion de lo solicitado por el cliente.
     *
     * @return  self
     */ 
    public function setDatos($Datos)
    {
        $this->Datos = $Datos;

        return $this;
    }

    /**
     * Get the value of Header
     *
     * @return  array
     */ 
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * Set the value of Header
     *
     * @param  array  $Header
     *
     * @return  self
     */ 
    public function setHeader(array $Header)
    {
        $this->Header = $Header;

        return $this;
    }

    /**
     * Get id del error almacenada en BD.
     *
     * @return  string
     */ 
    public function getIdError()
    {
        return $this->IdError;
    }

    /**
     * Set id del error almacenada en BD.
     *
     * @param  string  $IdError  Id del error almacenada en BD.
     *
     * @return  self
     */ 
    public function setIdError(string $IdError)
    {
        $this->IdError = $IdError;

        return $this;
    }

    /**
     * Get descripcion del error.
     *
     * @return  string
     */ 
    public function getMensajeError()
    {
        return $this->MensajeError;
    }

    /**
     * Set descripcion del error.
     *
     * @param  string|Throwable  $MensajeError  Descripcion del error.
     *
     * @return  self
     */ 
    public function setMensajeError(string $MensajeError)
    {
        $this->MensajeError = $MensajeError;

        return $this;
    }
}

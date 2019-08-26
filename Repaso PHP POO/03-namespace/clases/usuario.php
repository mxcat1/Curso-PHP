<?php

namespace Usuario_namespace;
class usuario
{
    private $id;
    private $nombre;
    private $apellido;

    public function __construct(int $id=1,string $nombre="sin nombre",string $apellido="sin apellido")
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }



}
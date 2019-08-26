
<?php
//POO
//Definir Clase

class Coche{
    public $color="rojo";
    public $marca="Ferrari";
    public $modelo="Aventador";
    private $velocidad=300;
    public $caballaje=500;
    public $plazas;

    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getPlazas()
    {
        return $this->plazas;
    }

    /**
     * @param mixed $plazas
     */
    public function setPlazas($plazas): void
    {
        $this->plazas = $plazas;
    }

    /**
     * @return int
     */
    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    /**
     * @param int $velocidad
     */
    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }


}
$coche1=new Coche();
var_dump($coche1);

echo "la velocidad del coche es {$coche1->getVelocidad()}";
?>
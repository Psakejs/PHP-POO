<?php 

class Plato
{
    public $nombre;
    public $precio;
}

class Pedido
{
    public $platos=[];

    public function agregarPlato(Plato $plato)
    {
        $this->platos[]=$plato;
    }

    public function calcularTotal()
    {
        $total=0;
        foreach($this->platos as $plato)
        {
            $total+=$plato->precio;
        }
        return $total;
    }
        
    
}

$plato1=new Plato();
$plato1->nombre="Pizza";
$plato1->precio=100000;
$plato2=new Plato();
$plato2->nombre="Hamburguesa";
$plato2->precio=50000;
$pedido=new Pedido();
$pedido->agregarPlato($plato1);
$pedido->agregarPlato($plato2);
echo "El total del pedido es: ".$pedido->calcularTotal();
package hn.unah.lenguajes.restaurante.restaurante.Services;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Comida;
import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;

public interface ComidaService {
    
    public Comida crearComida(Comida comida);

    public Comida buscarComida(String idComida);

    public Comida eliminarComida(String idComida);

    public Inventario asignarAInventario(String idproducto, String idComida);
}

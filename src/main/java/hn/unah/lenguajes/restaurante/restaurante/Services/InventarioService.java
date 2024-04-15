package hn.unah.lenguajes.restaurante.restaurante.Services;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;

public interface InventarioService {
    
    public Inventario crearInventario(Inventario inventario);

    public Inventario buscarInventario(String idProducto);

    
}

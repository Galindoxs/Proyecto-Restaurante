package hn.unah.lenguajes.restaurante.restaurante.Services;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;
import hn.unah.lenguajes.restaurante.restaurante.Entities.Proveedor;

public interface ProveedorService {
    
    public Proveedor crearProveedor(Proveedor proveedor);

    public Inventario asignarAInventario(long idproveedor, String idproducto);
}

package hn.unah.lenguajes.restaurante.restaurante.Services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;
import hn.unah.lenguajes.restaurante.restaurante.Entities.Proveedor;
import hn.unah.lenguajes.restaurante.restaurante.Repositories.InventarioRepository;
import hn.unah.lenguajes.restaurante.restaurante.Repositories.ProveedorRepository;
import hn.unah.lenguajes.restaurante.restaurante.Services.ProveedorService;

@Service
public class ProveedorServiceImpl implements ProveedorService{

    @Autowired
    private ProveedorRepository proveedorRepository;

    @Autowired
    private InventarioRepository inventarioRepository;

    @Override
    public Proveedor crearProveedor(Proveedor proveedor) {
        return proveedorRepository.save(proveedor);
    }

    @Override
    public Inventario asignarAInventario(long idproveedor, String idproducto) {
        if(proveedorRepository.existsById(idproveedor) && inventarioRepository.existsById(idproducto)){
         Inventario inventario = inventarioRepository.findById(idproducto).get();
         inventario.setProveedor(proveedorRepository.findById(idproveedor).get());
         return inventarioRepository.save(inventario);            
        }
        return null;
    }
    
}

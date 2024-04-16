package hn.unah.lenguajes.restaurante.restaurante.Services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;
import hn.unah.lenguajes.restaurante.restaurante.Repositories.InventarioRepository;
import hn.unah.lenguajes.restaurante.restaurante.Services.InventarioService;

@Service
public class InventarioServiceImpl implements InventarioService{

    @Autowired
    private InventarioRepository inventarioRepository;

    @Override
    public Inventario crearInventario(Inventario inventario) {
       return inventarioRepository.save(inventario);
    }

    @Override
    public Inventario buscarInventario(String idProducto) {
       return inventarioRepository.findById(idProducto).get();
    }
    
}

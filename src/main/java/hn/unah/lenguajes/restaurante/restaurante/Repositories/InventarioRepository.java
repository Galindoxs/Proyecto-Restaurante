package hn.unah.lenguajes.restaurante.restaurante.Repositories;

import org.springframework.data.repository.CrudRepository;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Inventario;

public interface InventarioRepository extends CrudRepository<Inventario, String>{
    
}

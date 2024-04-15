package hn.unah.lenguajes.restaurante.restaurante.Services;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Comida;

public interface ComidaService {
    
    public Comida crearComida(Comida comida);

    public Comida buscarComida(String idComida);

    public Comida eliminarComida(String idComida);
}

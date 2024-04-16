package hn.unah.lenguajes.restaurante.restaurante.Services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.restaurante.restaurante.Entities.Comida;
import hn.unah.lenguajes.restaurante.restaurante.Repositories.ComidaRepository;
import hn.unah.lenguajes.restaurante.restaurante.Services.ComidaService;

@Service
public class ComidaServiceImpl implements ComidaService{

    @Autowired
    private ComidaRepository comidaRepository;

    @Override
    public Comida crearComida(Comida comida) {
       return comidaRepository.save(comida);
    }

    @Override
    public Comida buscarComida(String idComida) {
       Comida comida = comidaRepository.findById(idComida).get();
       return comida;
    }

    @Override
    public Comida eliminarComida(String idComida) {
        return comidaRepository.findById(idComida).get();
    }
    
}

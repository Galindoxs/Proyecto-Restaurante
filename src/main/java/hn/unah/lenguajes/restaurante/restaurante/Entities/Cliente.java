package hn.unah.lenguajes.restaurante.restaurante.Entities;

import java.util.List;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "clientes")
@Data
public class Cliente {

    @Id
    @Column(name = "idcliente")
    private long idcliente; 

    private String name;

    private String apellido;

    private long identidad;

    private String correo;

    private long telefono;
    
    @OneToMany(mappedBy = "cliente")
    private List<Orden> orden;
    
}

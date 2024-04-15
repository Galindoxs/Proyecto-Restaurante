package hn.unah.lenguajes.restaurante.restaurante.Entities;

import java.util.List;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "proveedores")
@Data
public class Proveedor {
    
    @Id
    @Column(name = "idproveedor")
    private long idproveedor;

    private String nombre;

    private String direccion;
    
    private long telefono;

    private String email;

    @OneToMany(mappedBy = "proveedor")
    private List<Inventario> inventario;
}

package hn.unah.lenguajes.restaurante.restaurante.Entities;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToMany;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "comidas")
@Data
public class Comida {
    
    @Id
    @Column(name = "idcomida")
    private String idcomida;

    @Column(name = "nombrecomida")
    private String nombre;

    @Column(name = "tipocomida")
    private String tipocomida;

    @OneToOne
    @JoinColumn(name = "idorden", referencedColumnName = "idorden")
    private Orden orden;

    @OneToMany(mappedBy = "comida")
    private Inventario inventario;
}

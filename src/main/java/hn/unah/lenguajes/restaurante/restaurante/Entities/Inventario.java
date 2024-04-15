package hn.unah.lenguajes.restaurante.restaurante.Entities;

import java.time.LocalDate;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "inventario")
@Data
public class Inventario {
    @Id
    @Column(name = "idproducto")
    private String idproducto;

    @Column(name = "nombreproducto")
    private String nombre;

    @Column(name = "categoriaproducto")
    private String categoriaproducto;

    @Column(name = "cantidaddisponible")
    private long cantidaddisponible;

    @Column(name = "unidadmedida")
    private String unidadmedida;

    @Column(name = "fechacaducidad")
    private LocalDate fechacaducidad;

    @Column(name = "preciounidad")
    private long preciounidad;

    @ManyToOne
    @JoinColumn(name = "idproveedor", referencedColumnName = "idproveedor")
    private Proveedor proveedor;

    @ManyToOne
    @JoinColumn(name = "idcomida", referencedColumnName = "idcomida")
    private Comida comida;
}

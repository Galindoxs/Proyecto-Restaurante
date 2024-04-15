package hn.unah.lenguajes.restaurante.restaurante.Entities;

import java.time.LocalDate;
import java.util.List;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "facturas")
@Data
public class Factura {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "idfacturas")
    private long idfacturas;

    @Column(name = "fechaemision")
    private LocalDate fechaemision;

    @OneToMany(mappedBy = "factura")
    private List<Orden> orden;
}

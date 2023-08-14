package com.derian;

/**
 * @author derian-cordoba - 22/11/21
 * @project Patron_Chain_Responsability
 */
public class ManejadorConcreto3 extends Manejador {
    public double calculaCosteEnvio(Paquete p){
        if(p.getDestino().equals("Burgos")){
            return p.getPeso() * 1.5 + 3;
        }else if(super.getSucesor()!=null){
            return getSucesor().calculaCosteEnvio(p);
        }
        return 0;
    }
}
class Auto {
    constructor(marca, modello, targa){
        marca,
        modello, 
        targa
    }

    stampa(){
        console.log(marca +" " + modello + " " + targa);
    }
}


class Garage {
    constructor(){
        this.automobili = [];
    }

    isValida(auto){
        return auto != null && auto !== undefined
            && "modello" in auto 
            && "marca" in auto 
            && "targa" in auto; 
    }

    indexOf(auto){
        if (!this.isValida(auto)){
            return -1;
        }

        for (let index = 0; index < this.automobili.length; index++) {
            const macchina = this.automobili[index];
            if (macchina.targa === auto.targa){
                return index;
            }
        }
        return -1;
    }

    aggiungiAuto(auto){
        if (this.isValida(auto) && this.indexOf(auto) < 0){
            this.automobili.push(auto);
        }
    }

    rimuoviAuto(auto){
        let indice = this.indexOf(auto);
        if (this.isValida(auto)){
            this.automobili.slice(indice, 1);
        }
    }

    stampaAuto(marca){
        if (typeof marca == "string"){
            for (const auto of this.automobili) {
                if (auto.marca === marca){
                    console.log(auto.stampa());
                }
            }
        }
    }
}

let garage = new Garage();
let auto = new Auto("Fiat", "500L", "EX090TH");
let auto1 = new Auto("Fiat", "500", "EF091TL");
let auto2 = new Auto("BMW", "X5", "EK999TP");

garage.aggiungiAuto(auto);
garage.aggiungiAuto(auto1);
garage.aggiungiAuto(auto2);

garage.rimuoviAuto(auto2);

garage.stampaAuto("Fiat");
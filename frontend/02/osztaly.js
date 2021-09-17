// Szülő osztály
class Allat{}

// Osztály létrehozása, és származtatása az Allat osztályból
class Kutya extends Allat {
    // kontstruktor
    constructor(nev){
        super();
        this.nev = nev;
        this._eletkor = 4;
    }

    // getter
    get eletkor(){
        return this._eletkor;
    }

    // setter
    set eletkor(ujEletkor){
        if (ujEletkor >= 0) {
            this._eletkor = ujEletkor;
        } else {
            throw new Error("életkor nem lehet negatív");
        }
    }

    // sima methodus
    ugat(){
        console.log("vau " + this.nev);
    }
}

let bloki = new Kutya("Blöki");
console.log(bloki.eletkor);
bloki.ugat();
bloki.eletkor++;
console.log(bloki.eletkor);

const date = new Date("2000.01.01. 01:01:01");
console.log(date);

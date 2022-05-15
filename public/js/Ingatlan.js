class Ingatlan{
    constructor(elem,adat){
        this.elem = elem
        this.adat = adat
        this.megjelenit()
        this.torles = this.elem.find(".torles")
        this.modosit=this.elem.find(".modositas")
        this.erdekel=this.elem.find(".erdekel")
        this.torles.on("click", () => {
            this.torlesEsemeny()
        })
        this.erdekel.on("click", () => {
            this.erdekelEsemeny()
        })
        this.modosit.on("click",()=>{
            this.modositasEsemeny()
        })
    }
    megjelenit(){
   
        // this.elem.append("<td>"+this.adat.kategoria.nev+"</td>")
        // this.elem.append("<td>"+this.adat.leiras+"</td>")
        // this.elem.append("<td>"+this.adat.hirdetesDatuma+"</td>")
        // this.elem.append("<td>"+this.adat.tehermentes+"</td>")
        // this.elem.append("<td>"+this.adat.kepUrl+"</td>")
        // this.elem.append("<td>"+"<input type='button' value='Törlés' class='torles'>"+"</td>")
        // this.elem.append("<td>"+"<input type='button' value='Módosítás' class='modositas'>"+"</td>")
        
        this.elem.append("<div class='hirdetes-nev'>"+this.adat.kategoria.nev+"</div>")
        this.elem.append("<div class='hirdetes-leiras'>"+this.adat.leiras+"</div>")
        this.elem.append("<div class='hirdetes-datum'>"+this.adat.hirdetesDatuma+"</div>")
        this.elem.append("<div class='hirdetes-allapot'>"+(this.adat.tehermentes==1 ?"igen":"nem")+"</div>")
        this.elem.append("<div class='hirdetes-kep'><img src='kepek/"+this.adat.kepUrl+"'></div>")
        this.elem.append("<div class='gomb-tarolo'>"+"<input type='button' value='Törlés' class='torles'><input type='button' value='Módosítás' class='modositas'>"+"</div>")
        this.elem.append("<div class='erdekel-gomb'>"+"<input type='button' value='Érdekel' class='erdekel'>"+"</div>")

        
    }
    torlesEsemeny() {
        let esemeny = new CustomEvent("Torles", { detail: this.adat })
        window.dispatchEvent(esemeny)
    }
    erdekelEsemeny() {
        let esemeny = new CustomEvent("Erdekel", { detail: this.adat })
        window.dispatchEvent(esemeny)
    }
    modositasEsemeny() {
        let esemeny = new CustomEvent("Modositas", { detail: this.adat })
        window.dispatchEvent(esemeny)
    }
}
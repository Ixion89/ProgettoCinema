export class film {
    public titolo: string="";
    public regista: string ="";
    public anno: number=0;
    public durata: number=0;
    public a_generi: string[] ;
    public a_cast: string[];
    public casaproduzione: string ="";
    
     constructor(obj?: any) {
        this.setObj(obj);
    }
    
      setObj(obj?: any) {
        if (obj) {
            this.anno= (typeof obj.anno === "number") ? obj.anno : this.anno;
            this.durata = (typeof obj.durata === "number") ? obj.durata : this.durata;
            this.titolo = obj.titolo || this.titolo;
            this.regista = obj.regista || this.regista;
            this.casaproduzione = obj.casaproduzione || this.casaproduzione;
            this.a_generi = obj.a_generi || this.a_generi;
            this.a_cast= obj.a_cast || this.a_cast;
         }
    }
}
import {Component, OnInit} from '@angular/core';  //gli import sono case sensitive
import {film} from 'src/models/film.model';
import {FilmService} from 'C:/xampp/htdocs/_progetto/Client-side/src/app/film.service';
import {Observable} from 'rxjs';
import {HttpClient} from '@angular/common/http';
@Component({
    selector: 'app-film',
    templateUrl: './film.component.html',
    styleUrls: ['./film.component.css']
})
export class FilmComponent implements OnInit {
    films: Observable<film[]>;
    id: any;
    constructor(public sfilm: FilmService, public http:HttpClient) {}

    ngOnInit() {
        this.getFilms();
        console.log("che",this.films);
        this.getidsession();
        console.log("test",this.id);
        this.http.get('http://localhost/_progetto/Server-side/public/index.php/prova/sessioni').subscribe(
        data=>{console.log(data);
        this.id=data;});
    }

     getFilms(){
         this.films = this.sfilm.getFilms(); //se lo piglia
     }
     
     getidsession(){
         this.id=this.sfilm.getstringa();
         console.log('getidsessio',this.id);
         
     }
}

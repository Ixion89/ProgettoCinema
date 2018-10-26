import {Component, OnInit} from '@angular/core';  //gli import sono case sensitive
import {film} from 'src/models/film.model';
import {FilmService} from 'C:/Users/Teresa/appcinema/src/app/film.service';
import {Observable} from 'rxjs';
@Component({
    selector: 'app-film',
    templateUrl: './film.component.html',
    styleUrls: ['./film.component.css']
})
export class FilmComponent implements OnInit {
    films: Observable<film[]>;
    constructor(public sfilm: FilmService) {}

    ngOnInit() {
        this.getFilms();
        console.log("che",this.films);
    }

     getFilms(){
         this.films = this.sfilm.getFilms(); //se lo piglia
     }
}

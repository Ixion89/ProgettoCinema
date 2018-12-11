import { Injectable } from '@angular/core';
import {film} from '../Models/film.model';
import {HttpClient} from '@angular/common/http';
import {Observable, throwError} from 'rxjs';
import {map, catchError} from "rxjs/operators";
 @Injectable()
export class FilmService {
    // public films: Observable<film[]>;
  constructor(private http: HttpClient) {        
      }

     getFilms(): Observable<film[]> {
         return this.http.get<film[]>('http://localhost/_progetto/Server-side/public/index.php/api/films/all');
     }
         
     getstringa(): Observable<any>{
         return this.http.get<any>('http://localhost/_progetto/Server-side/public/index.php/prova/sessioni');
     }
         
         

}
  


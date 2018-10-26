import { Injectable } from '@angular/core';
import {film} from 'C:/Users/Teresa/appcinema/src/Models/film.model';
import {HttpClient} from '@angular/common/http';
import {Observable, throwError} from 'rxjs';
import {map, catchError} from "rxjs/operators";
 @Injectable()
export class FilmService {
     public films: Observable<film[]>;
  constructor(private http: HttpClient) {        
      }

     getFilms(): Observable<film[]> {
         return this.http.get<film[]>('http://cinema/api/films/all');
         
         
         
}
}
  


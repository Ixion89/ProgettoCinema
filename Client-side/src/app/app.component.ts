import {Component, OnInit} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';
import {film} from '../Models/film.model';
import {map, filter, scan} from 'rxjs/operators';
@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {

    title: any;
    constructor(private http: HttpClient) {
    }

    ngOnInit(): void {
        

    }


}

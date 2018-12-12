import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders, HttpResponse} from '@angular/common/http';
import {Observable} from 'rxjs';
import {map} from "rxjs/operators";
import {Auth} from './auth';
 
@Injectable({
  providedIn: 'root'
})
export class AuthService {
  constructor(private http: HttpClient) { }
  /*addRegprova(email: string, password:string){
        //let body = JSON.stringify(idreg);
      //console.log(body);
        const Headers = new HttpHeaders().set('Content-Type', 'text/plain');
        //const options= {responseType: 'text'} ;     
      return this.http.post('http://cinema/api/usehr/signup', {email, password}, {headers: Headers, observe: "response", responseType: 'text'});
  //funziona ma senza body??    */ 
  
   createArticle(auth: any): Observable<any> {
        let httpHeaders = new HttpHeaders()
            .set('Content-Type', 'application/json');   
        let options = {
            headers: httpHeaders
        };        
        return this.http.post<any>('http://cinema/api/user/signup', auth, options);
    }    
 postUtente(auth: any): Observable<HttpResponse<any>> {
        let httpHeaders = new HttpHeaders({
             'Content-Type' : 'application/json'
        });    
     var obj = JSON.stringify(auth);
     console.log("frefre",obj);
    /* console.log("ababab", this.http.post<any>('http://cinema/api/user/signup', obj,
            {
              headers: httpHeaders,
             observe: 'response'
           
            }));*/
        return this.http.post<any>('http://cinema/api/user/signup', obj,
            {
              headers: httpHeaders,
             observe: 'response'
           
            },
        );
        
    } 

}

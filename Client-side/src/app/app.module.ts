import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AppRoutingModule } from './app-routing.module';
import { APP_BASE_HREF } from '@angular/common';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap/';
import { FilmComponent } from './film/film.component';
import {FilmService} from './film.service';
import { ReactiveFormsModule } from '@angular/forms';
import { DovetrovComponent } from './dovetrov/dovetrov.component';
import { UserComponent } from './user/user.component';
import { FormsModule } from '@angular/forms';
import { ChisiamoComponent } from './chisiamo/chisiamo.component';
import { ContattiComponent } from './contatti/contatti.component';
import { LoginComponent } from './login/login.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    FilmComponent,
   
    DovetrovComponent,
    UserComponent,
    ChisiamoComponent,
    ContattiComponent,
    LoginComponent,

  ],
  imports: [
    FormsModule,
    BrowserModule,
    ReactiveFormsModule,
    HttpClientModule,
    AppRoutingModule,
      NgbModule.forRoot()
  ],
  providers: [
     {provide: APP_BASE_HREF, useValue: '/' },
     FilmService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

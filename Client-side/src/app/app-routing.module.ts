import {NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {Routes, RouterModule} from '@angular/router';
import {HomeComponent} from './home/home.component';
import {FilmComponent} from './film/film.component';
import {UserComponent} from './user/user.component';
import {DovetrovComponent} from './dovetrov/dovetrov.component';
import {ChisiamoComponent} from './chisiamo/chisiamo.component';
import {ContattiComponent} from './contatti/contatti.component';
import {LoginComponent} from './login/login.component';

const routes: Routes = [
    {path: 'home', component: HomeComponent},
    {path: 'film', component: FilmComponent},
    {path: 'user', component: UserComponent},
    {path: 'dovetrovarci', component: DovetrovComponent},
    {path: 'chisiamo', component: ChisiamoComponent},
    {path: 'contatti', component: ContattiComponent},
    {path: 'login', component: LoginComponent}
]   

@NgModule({
    imports: [
        CommonModule,
        RouterModule.forRoot(routes)
    ],
    declarations: [],
    exports: [RouterModule]
})
export class AppRoutingModule {}

import { Component, OnInit } from '@angular/core';
import {NgbCarouselConfig} from '@ng-bootstrap/ng-bootstrap/';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
  providers: [NgbCarouselConfig]
})
export class HomeComponent implements OnInit {
    title= 'app';
  constructor( config: NgbCarouselConfig) {
      config.interval=1500;
      config.wrap=true;
      config.keyboard=true; 
  }

  ngOnInit() {
  }

}

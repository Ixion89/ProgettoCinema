import { Component, OnInit } from '@angular/core';
import {AuthService} from '../auth.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';


@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.css']
})
export class SigninComponent implements OnInit {
 registerForm: FormGroup;
  submitted = false; //httpangularpost
  _email: string;
  _password: string;
  dataSaved=false;
  constructor(public AuthS: AuthService, private formBuilder: FormBuilder, private router: Router) { }

  ngOnInit() {
            this.registerForm = this.formBuilder.group({
          email: ['', [Validators.required, Validators.email]] ,
          password: ['', [Validators.required, Validators.minLength(6)]]
       });
      ;
  }
 onFormSubmit(){
      let auth = this.registerForm.value; 
      this.registerForm.reset();
      
}
  saveUtente(){
      let auth2 = this.registerForm.value;
      console.log("auth2",auth2);
       this.AuthS.postUtente(auth2).subscribe(res => { 
           console.log(res);
          console.log(auth2);
          console.log(res.headers.get('Content-Type'));		  
  });
}
gotoSignUp(){
    this.router.navigate(['/signup']);
}
}

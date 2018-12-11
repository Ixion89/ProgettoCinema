import { Component, OnInit } from '@angular/core';
import {AuthService} from 'C:/xampp/htdocs/_progetto/Client-side/src/app/auth.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import {Auth} from 'C:/xampp/htdocs/_progetto/Client-side/src/app/auth';
@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {
  registerForm: FormGroup;
  submitted = false; //httpangularpost
  _email: string;
  _password: string;
  dataSaved=false;
  constructor(public AuthS: AuthService, private formBuilder: FormBuilder) {
   }    
  ngOnInit() {
      //metti form group al tag html parent
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
  
   
  /* creaUtente(){
       if(this.submitted = true){
             var auth2 = this.registerForm.value;           
      this.AuthS.postUtente(auth2).subscribe(res=>{
          this.dataSaved=true; })
       alert('SUCCESS!! :-)')   
       }
   }*/
  saveUtente(){
      let auth2 = this.registerForm.value;
      console.log("auth2",auth2);
       this.AuthS.postUtente(auth2).subscribe(res => { 
           console.log(res);
          console.log(auth2);
          console.log(res.headers.get('Content-Type'));		  
  });
}
}
   
   



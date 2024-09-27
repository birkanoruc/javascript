import { Injectable } from '@angular/core';
import { User } from '../login/user';

@Injectable({
  providedIn: 'root'
})

export class AccountService {

  constructor() { }

  loggedIn = false;

  login(user:User):Boolean{
    if(user.userName === "birkan" && user.password==="12345"){
      localStorage.setItem("isLogged", user.userName);
      this.loggedIn=true;
      return true;
    }
    return false;
  }

  isLogedIn(){
    return this.loggedIn;
  }

  logout(){
    localStorage.removeItem("isLogged");
    this.loggedIn=false;
  }
}

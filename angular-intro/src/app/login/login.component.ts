import { Component, OnInit } from '@angular/core';
import { NgForm, FormsModule } from '@angular/forms';
import { AccountService } from '../services/account.service';
import { User } from './user';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [FormsModule, CommonModule],
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent implements OnInit{

  constructor(private accountService: AccountService){}

  model:User = new User;

  ngOnInit(): void {

  }

  login(form:NgForm){
    this.accountService.login(this.model);
  }
}

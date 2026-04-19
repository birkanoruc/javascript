import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Category } from './category';
import { CategoryService } from '../services/category.service';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-category',
  standalone: true,
  imports: [CommonModule, RouterModule],
  providers: [CategoryService],
  templateUrl: './category.component.html',
  styleUrl: './category.component.css'
})

export class CategoryComponent implements OnInit {
  title = "Category List";

  constructor(
    private categoryService: CategoryService
  ){}

  ngOnInit() {
    this.categoryService.getCategories().subscribe(data => {
      this.categories = data;
    });
  }

  categories !: Category[];
}

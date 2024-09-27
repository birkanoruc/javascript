import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Product } from '../product';
import { Category } from '../../category/category';
import { CategoryService } from '../../services/category.service';
import { FormsModule, NgForm } from '@angular/forms';
import { ProductService } from '../../services/product.service';
import { AlertifyService } from '../../services/alertify.service';

@Component({
  selector: 'app-classic-forms',
  standalone: true,
  imports: [CommonModule, FormsModule],
  providers: [CategoryService, ProductService],
  templateUrl: './classic-forms.component.html',
  styleUrl: './classic-forms.component.css'
})
export class ClassicFormsComponent implements OnInit {

  constructor(
    private categoryService: CategoryService,
    private productService: ProductService,
    private alertifyService: AlertifyService
  ){}

  categories !: Category[];

  model : Product = new Product();

  ngOnInit() {
    this.categoryService.getCategories().subscribe(data => {
      this.categories = data;
    });
  }

  add(form:NgForm){
    this.productService.addProduct(this.model).subscribe(data => {
      this.alertifyService.success(data.productName + " added!")
    })
  }

}

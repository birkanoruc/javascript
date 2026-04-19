import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { Product } from '../product';
import { Category } from '../../category/category';
import { CategoryService } from '../../services/category.service';
import { CommonModule } from '@angular/common';
import { ProductService } from '../../services/product.service';
import { AlertifyService } from '../../services/alertify.service';

@Component({
  selector: 'app-reactive-forms',
  standalone: true,
  imports: [ReactiveFormsModule, CommonModule],
  providers: [CategoryService, ProductService],
  templateUrl: './reactive-forms.component.html',
  styleUrl: './reactive-forms.component.css'
})
export class ReactiveFormsComponent implements OnInit {

  constructor(private formBuilder: FormBuilder,
    private categoryService: CategoryService,
    private productService: ProductService,
    private alertifyService: AlertifyService
  ){}

  productAddForm!:FormGroup;
  model:Product = new Product;
  categories !: Category[];

  createProductAddForm(){
    this.productAddForm = this.formBuilder.group({
      productName: ["", Validators.required],
      unitPrice:["", Validators.required],
      categoryId:["", Validators.required],
      quantityPerUnit:["", Validators.required],
      imageUrl:["", Validators.required],
      unitsInStock:["", Validators.required]
    });
  }

  ngOnInit() {
    this.categoryService.getCategories().subscribe(data => {
      this.categories = data;
    });

    this.createProductAddForm();
  }

  add(){
    if(this.productAddForm.valid){
      this.model = Object.assign({}, this.productAddForm.value);
    }

    this.productService.addProduct(this.model).subscribe(data => {
      this.alertifyService.success(data.productName + " added!")
    })
  }
}

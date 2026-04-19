import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Product } from './product';
import { ProductFilterPipe } from './product-filter.pipe';
import { FormsModule } from '@angular/forms';
import { AlertifyService } from '../services/alertify.service';
import { ProductService } from '../services/product.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-product',
  standalone: true,
  imports: [CommonModule, ProductFilterPipe, FormsModule],
  providers: [ProductService],
  templateUrl: './product.component.html',
  styleUrl: './product.component.css'
})
export class ProductComponent implements OnInit {

  products !: Product[];

  title = "Product List";

  filterText = "";

  constructor(
    private alertifyService: AlertifyService,
    private productService: ProductService,
    private activatedRoute: ActivatedRoute
  ){}

  ngOnInit() {

    this.activatedRoute.params.subscribe(params => {
      this.productService.getProducts(params["categoryId"]).subscribe(data => {
        this.products = data;
      });
    })

  }

  addToCart(product: Product) : void{
    this.alertifyService.success( product.productName + " added!")
  }
}

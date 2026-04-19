import { Routes } from '@angular/router';
import { ProductComponent } from './product/product.component';
import { CategoryComponent } from './category/category.component';
import { ClassicFormsComponent } from './product/classic-forms/classic-forms.component';
import { ReactiveFormsComponent } from './product/reactive-forms/reactive-forms.component';
import { LoginComponent } from './login/login.component';
import { LoginGuard } from './login/login.guard';

export const routes: Routes = [
  {
    path: "products",
    component: ProductComponent
  },
  {
    path: "product-add-classic-form",
    component: ClassicFormsComponent,
    canActivate: [LoginGuard]
  },
  {
    path: "product-add-reactive-form",
    component: ReactiveFormsComponent,
    canActivate: [LoginGuard]
  },
  {
    path: "categories",
    component: CategoryComponent
  },
  {
    path: "login",
    component: LoginComponent
  },
  {
    path: "",
    redirectTo: "/products",
    pathMatch: "full"
  },
  {
    path: "products/category/:categoryId",
    component: ProductComponent
  },
];

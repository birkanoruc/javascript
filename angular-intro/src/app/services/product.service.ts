import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { Product } from '../product/product';
import { catchError, Observable, tap, throwError } from 'rxjs';

@Injectable()
export class ProductService {

  constructor(private http: HttpClient) { }

  path = "http://localhost:3000/products";

  getProducts(categoryId: number): Observable<Product[]> {

    let newPath = this.path;
    if (categoryId){
      newPath += "?categoryId="+categoryId;
    }

    return this.http.get<Product[]>(newPath).pipe(
      // tap(data => console.log(JSON.stringify(data))),
      catchError(this.handleError)
    );
  }

  addProduct(product: Product):Observable<Product>{
    const httpOptions={
      headers: new HttpHeaders({
        "Content-Type":"application/json",
        "Authorization":"Token"
      })
    }
    return this.http.post<Product>(this.path, product, httpOptions).pipe(
      // tap(data => console.log(JSON.stringify(data))),
      catchError(this.handleError)
    );
  }

  handleError(error: HttpErrorResponse) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      errorMessage = 'Client side error: ' + error.error.message;
    } else {
      errorMessage = `Server side error. Error code: ${error.status}\nMessage: ${error.message}`;
    }
    console.error(errorMessage);
    return throwError(() => new Error(errorMessage));
  }
}

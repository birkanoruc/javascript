export class Category{
  id:number;
  categoryName:string;
  seoUrl:string;

  constructor(id:number, categoryName:string, seoUrl:string){
    this.id = id;
    this.categoryName = categoryName;
    this.seoUrl = seoUrl;
  }
}

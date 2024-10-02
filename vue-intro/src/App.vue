<template>
  <div>
    <img alt="Vue logo" src="./assets/logo.png" />
    <HelloWorld msg="Welcome to Your Vue.js App" />
    <ProductAdd @add:product="addProduct" />
    <ProductList
      :products="products"
      @delete:product="deleteProduct"
      @update:product="updateProduct"
    />
  </div>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import ProductList from "./components/ProductList.vue";
import ProductAdd from "./components/ProductAdd.vue";

export default {
  name: "App",
  components: {
    HelloWorld,
    ProductList,
    ProductAdd,
  },
  data() {
    return {
      products: [
        {
          id: 1,
          categoryId: 1,
          productName: "Laptop",
          quantityPerUnit: "Acer Laptop",
          unitPrice: 5000,
          unitsInStock: 2,
        },
        {
          id: 2,
          categoryId: 2,
          productName: "Mouse",
          quantityPerUnit: "Acer Mouse",
          unitPrice: 50,
          unitsInStock: 3,
        },
        {
          id: 3,
          categoryId: 2,
          productName: "Keyboard",
          quantityPerUnit: "Acer Keyboard",
          unitPrice: 500,
          unitsInStock: 4,
        },
      ],
    };
  },
  mounted() {
    this.getProducts();
  },
  methods: {
    async getProducts() {
      const result = await fetch("http://localhost:3000/products");
      const data = await result.json();
      this.products = data;
    },
    async deleteProduct(product) {
      await fetch("http://localhost:3000/products/" + product.id, {
        method: "DELETE",
      });

      this.products = this.products.filter(
        (productToFilter) => productToFilter.id !== product.id
      );
    },
    async updateProduct(product) {
      const result = await fetch(
        "http://localhost:3000/products/" + product.id,
        {
          method: "PUT",
          body: JSON.stringify(product),
          headers: { "Content-Type": "application/json" },
        }
      );
      const updatedProduct = await result.json();
      this.products = this.products.map((item) =>
        item.id === product.id ? updatedProduct : product
      );
    },
    async addProduct(product) {
      const result = await fetch("http://localhost:3000/products", {
        method: "POST",
        body: JSON.stringify(product),
        headers: { "Content-Type": "application/json" },
      });
      const newProduct = await result.json();
      this.products = [...this.products, newProduct];
    },
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

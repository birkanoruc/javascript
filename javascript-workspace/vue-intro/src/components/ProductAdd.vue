<template>
  <div id="add-form">
    <form @submit.prevent="handleAdd()">
      <div class="form-group">
        <label for="categoryId">categoryId</label>
        <input type="text" v-model="product.categoryId" class="form-control" />
      </div>
      <div class="form-group">
        <label for="productName">productName</label>
        <input type="text" v-model="product.productName" class="form-control" />
      </div>
      <div class="form-group">
        <label for="quantityPerUnit">quantityPerUnit</label>
        <input
          type="text"
          v-model="product.quantityPerUnit"
          class="form-control"
        />
      </div>
      <div class="form-group">
        <label for="unitPrice">unitPrice</label>
        <input type="text" v-model="product.unitPrice" class="form-control" />
      </div>
      <div class="form-group">
        <label for="unitsInStock">unitsInStock</label>
        <input
          type="text"
          v-model="product.unitsInStock"
          class="form-control"
        />
      </div>
      <button class="btn btn-success" type="submit">Add</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "ProductAdd",
  data() {
    return {
      product: {
        categoryId: "",
        productName: "",
        quantityPerUnit: "",
        unitPrice: "",
        unitsInStock: "",
      },
    };
  },
  methods: {
    handleAdd() {
      this.$emit("add:product", this.product);
    },
  },
};
</script>

<style scoped>
#add-form {
  text-align: left;
  margin-right: 200px;
  margin-left: 200px;
  margin-top: 50px;
  margin-bottom: 50px;
}
label {
  font-weight: 700;
}
</style>

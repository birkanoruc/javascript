<template>
  <div>
    <p v-if="products.length == 0">Ürün listesi boş</p>
    <table class="table" v-else>
      <thead>
        <tr>
          <th>id</th>
          <th>categoryId</th>
          <th>productName</th>
          <th>quantityPerUnit</th>
          <th>unitPrice</th>
          <th>unitsInStock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td>{{ product.id }}</td>
          <td v-if="updateId === product.id">
            <input
              type="text"
              v-model="product.categoryId"
              class="form-control-sm"
              id="id"
            />
          </td>
          <td v-else>{{ product.categoryId }}</td>
          <td v-if="updateId === product.id">
            <input
              type="text"
              v-model="product.productName"
              class="form-control-sm"
              id="id"
            />
          </td>
          <td v-else>{{ product.productName }}</td>
          <td v-if="updateId === product.id">
            <input
              type="text"
              v-model="product.quantityPerUnit"
              class="form-control-sm"
              id="id"
            />
          </td>
          <td v-else>{{ product.quantityPerUnit }}</td>
          <td v-if="updateId === product.id">
            <input
              type="text"
              v-model="product.unitPrice"
              class="form-control-sm"
              id="id"
            />
          </td>
          <td v-else>{{ product.unitPrice }}</td>
          <td v-if="updateId === product.id">
            <input
              type="text"
              v-model="product.unitsInStock"
              class="form-control-sm"
              id="id"
            />
          </td>
          <td v-else>{{ product.unitsInStock }}</td>
          <td v-if="updateId !== product.id">
            <button
              class="btn btn-sm btn-primary mx-2"
              @click="handleUpdate(product)"
            >
              Update
            </button>
            <button
              class="btn btn-sm btn-danger"
              @click="handleDelete(product)"
            >
              Delete
            </button>
          </td>
          <td v-else>
            <button
              class="btn btn-sm btn-primary mx-2"
              @click="handleSave(product)"
            >
              Save
            </button>
            <button class="btn btn-sm btn-danger" @click="updateId = null">
              Cancel
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: "ProductList",
  data() {
    return {
      updateId: null,
    };
  },
  props: {
    products: Array,
  },
  methods: {
    handleDelete(product) {
      this.$emit("delete:product", product);
    },
    handleUpdate(product) {
      this.updateId = product.id;
    },
    handleSave(product) {
      this.$emit("update:product", product);
      this.updateId = null;
    },
  },
};
</script>

<style scoped></style>

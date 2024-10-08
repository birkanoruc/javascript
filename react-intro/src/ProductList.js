import React, { Component } from "react";
import { Table, Button } from "reactstrap";

export default class ProductList extends Component {
  render() {
    return (
      <div>
        <h6>
          {this.props.info.title} - {this.props.currentCategory}
        </h6>
        <Table>
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>In Stock</th>
              <th>Add to Cart</th>
            </tr>
          </thead>
          <tbody>
            {this.props.products.map((product) => (
              <tr key={product.id}>
                <th scope="row">{product.id}</th>
                <td>{product.productName}</td>
                <td>{product.unitPrice}</td>
                <td>{product.unitsInStock}</td>
                <td>
                  <Button
                    onClick={() => this.props.addToCart(product)}
                    color="primary"
                  >
                    add to cart
                  </Button>
                </td>
              </tr>
            ))}
          </tbody>
        </Table>
      </div>
    );
  }
}

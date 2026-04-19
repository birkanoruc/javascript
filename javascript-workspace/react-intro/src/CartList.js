import React, { Component } from "react";
import { Table, Button } from "reactstrap";

export default class CartList extends Component {
  renderCart() {
    return (
      <Table striped>
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
          {this.props.cart.map((cartItem) => (
            <tr key={cartItem.product.id}>
              <th scope="row">{cartItem.product.id}</th>
              <td>{cartItem.product.productName}</td>
              <td>{cartItem.product.unitPrice}</td>
              <td>{cartItem.product.unitsInStock}</td>
              <td>
                <Button
                  onClick={() => this.props.removeFromCart(cartItem.product)}
                  color="danger"
                >
                  remove from cart
                </Button>
              </td>
            </tr>
          ))}
        </tbody>
      </Table>
    );
  }
  render() {
    return <div>{this.renderCart()}</div>;
  }
}

import React, { Component } from "react";
import { connect } from "react-redux";
import { Badge, Button, Table } from "reactstrap";
import { getProducts } from "../../redux/actions/productActions";
import { bindActionCreators } from "redux";
import { addToCart } from "../../redux/actions/cartActions";
import alertify from "alertifyjs";
import { Link } from "react-router-dom";

class ProductList extends Component {
  componentDidMount() {
    this.props.actions.getProducts();
  }

  addToCart = (product) => {
    this.props.actions.addToCart({
      quantity: 1,
      product,
    });
    alertify.success(product.productName + "added to cart");
  };

  render() {
    return (
      <div>
        Product List{" "}
        <Badge color="primary">{this.props.currentCategory.categoryName}</Badge>
        <Table>
          <thead>
            <tr>
              <th>#</th>
              <th>categoryID</th>
              <th>productName</th>
              <th>quantityPerUnit</th>
              <th>unitPrice</th>
              <th>unitsInStock</th>
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            {this.props.products.map((product) => (
              <tr key={product.id}>
                <th scope="row">{product.id}</th>
                <td>{product.categoryId}</td>
                <td>
                  <Link to={"/saveproduct/" + product.id}>
                    {product.productName}
                  </Link>
                </td>
                <td>{product.quantityPerUnit}</td>
                <td>{product.unitPrice}</td>
                <td>{product.unitsInStock}</td>
                <td>
                  <Button
                    onClick={() => this.addToCart(product)}
                    color="primary"
                  >
                    Add to cart
                  </Button>
                </td>
              </tr>
            ))}
          </tbody>
        </Table>
        <Badge color="info">Product Count: {this.props.products.length}</Badge>
      </div>
    );
  }
}

function mapStateToProps(state) {
  return {
    currentCategory: state.changeCategoryReducer,
    products: state.productListReducer,
  };
}

function mapDispatchToProps(dispatch) {
  return {
    actions: {
      getProducts: bindActionCreators(getProducts, dispatch),
      addToCart: bindActionCreators(addToCart, dispatch),
    },
  };
}

export default connect(mapStateToProps, mapDispatchToProps)(ProductList);

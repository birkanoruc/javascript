import React, { Component } from "react";
import { connect } from "react-redux";
import {
  changeCategory,
  getCategories,
} from "../../redux/actions/categoryActions";
import { getProducts } from "../../redux/actions/productActions";
import { bindActionCreators } from "redux";
import { ListGroup, ListGroupItem, Badge } from "reactstrap";

class CategoryList extends Component {
  componentDidMount() {
    this.props.actions.getCategories();
  }

  selectCategory = (category) => {
    this.props.actions.changeCategory(category);
    this.props.actions.getProducts(category.id);
  };

  render() {
    return (
      <div>
        <ListGroup>
          {this.props.categories.map((category) => (
            <ListGroupItem
              key={category.id}
              onClick={() => this.selectCategory(category)}
              active={category.id === this.props.currentCategory.id}
            >
              {category.categoryName}
            </ListGroupItem>
          ))}
        </ListGroup>
        <Badge color="info">
          Category Count: {this.props.categories.length}{" "}
        </Badge>
      </div>
    );
  }
}

function mapStateToProps(state) {
  return {
    currentCategory: state.changeCategoryReducer,
    categories: state.categoryListReducer,
  };
}

function mapDispatchToProps(dispatch) {
  return {
    actions: {
      getCategories: bindActionCreators(getCategories, dispatch),
      changeCategory: bindActionCreators(changeCategory, dispatch),
      getProducts: bindActionCreators(getProducts, dispatch),
    },
  };
}

export default connect(mapStateToProps, mapDispatchToProps)(CategoryList);

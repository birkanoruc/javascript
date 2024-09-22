import React, { useEffect, useState } from "react";
import { connect } from "react-redux";
import { saveProduct } from "../../redux/actions/productActions";
import { getCategories } from "../../redux/actions/categoryActions";
import ProductDetail from "./ProductDetail";
import { bindActionCreators } from "redux";
import { useParams, useNavigate } from "react-router-dom"; // React Router v6 hook'ları

function CreateOrUpdateProduct({ products, categories, actions, ...props }) {
  const { productId } = useParams(); // useParams ile productId'yi alıyoruz
  const navigate = useNavigate();
  const [product, setProduct] = useState({ ...props.product });
  const [errors, setErrors] = useState({});

  useEffect(() => {
    if (categories.length === 0) {
      actions.getCategories();
    }

    if (productId && products.length > 0) {
      const foundProduct = getProductById(products, productId);
      setProduct(foundProduct || {});
    }
  }, [props.product, categories.length, actions, productId, products]);

  function handleChange(event) {
    const { name, value } = event.target;

    setProduct((previousProduct) => ({
      ...previousProduct,
      [name]: name === "categoryId" ? parseInt(value, 10) : value,
    }));

    validate(name, value);
  }

  function validate(name, value) {
    if (name === "productName" && value === "") {
      setErrors((previousErrors) => ({
        ...previousErrors,
        productName: "Ürün ismi zorunlu alandır!",
      }));
    } else {
      setErrors((previousErrors) => ({
        ...previousErrors,
        productName: "",
      }));
    }
  }

  function handleSave(event) {
    event.preventDefault();
    actions.saveProduct(product).then(() => {
      navigate("/"); // Yönlendirme
    });
  }

  return (
    <ProductDetail
      product={product}
      categories={categories}
      onChange={handleChange}
      onSave={handleSave}
      errors={errors}
    />
  );
}

export function getProductById(products, productId) {
  return products.find((product) => product.id == productId) || null;
}

function mapStateToProps(state) {
  return {
    products: state.productListReducer,
    categories: state.categoryListReducer,
  };
}

function mapDispatchToProps(dispatch) {
  return {
    actions: {
      getCategories: bindActionCreators(getCategories, dispatch),
      saveProduct: bindActionCreators(saveProduct, dispatch),
    },
  };
}

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(CreateOrUpdateProduct);

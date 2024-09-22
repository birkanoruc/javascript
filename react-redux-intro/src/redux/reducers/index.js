import { combineReducers } from "redux";
import changeCategoryReducer from "./changeCategoryReducer";
import categoryListReducer from "./categoryListReducer";
import cartReducer from "./cartReducer";
import productListReducer from "./productListReducer";
import saveProductReducer from "./saveProductReducer";

const rootReducer = combineReducers({
  changeCategoryReducer,
  categoryListReducer,
  productListReducer,
  cartReducer,
  saveProductReducer,
});

export default rootReducer;

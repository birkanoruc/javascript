import React from "react";
import { Container } from "reactstrap";
import Navi from "../navi/Navi";
import NotFound from "../common/NotFound";
import Dashboard from "./Dashboard";
import CartDetail from "../cart/CartDetail";
import CreateOrUpdateProduct from "../products/CreateOrUpdateProduct";
import { Route, Routes } from "react-router-dom";

function App() {
  return (
    <Container>
      <Navi />
      <Routes>
        <Route path="/" element={<Dashboard />} />
        <Route path="/product" element={<Dashboard />} />
        <Route path="/cart" element={<CartDetail />} />
        <Route path="/saveproduct" element={<CreateOrUpdateProduct />} />
        <Route
          path="/saveproduct/:productId"
          element={<CreateOrUpdateProduct />}
        />
        <Route path="*" element={<NotFound />} />
      </Routes>
    </Container>
  );
}

export default App;

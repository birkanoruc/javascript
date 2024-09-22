import React, { useState } from "react";
import {
  Collapse,
  Navbar,
  NavbarToggler,
  NavbarBrand,
  Nav,
  NavItem,
  NavLink,
} from "reactstrap";
import CartSummary from "../cart/CartSummary";
import { Link } from "react-router-dom";

function Navi(args) {
  const [isOpen, setIsOpen] = useState(false);

  const toggle = () => setIsOpen(!isOpen);

  return (
    <Navbar {...args} expand="md">
      <NavbarBrand tag={Link} to="/">
        React Redux Intro
      </NavbarBrand>
      <NavbarToggler onClick={toggle} />
      <Collapse isOpen={isOpen} navbar>
        <Nav className="me-auto" navbar>
          <NavItem>
            <NavLink tag={Link} to="/saveproduct">
              Create Product
            </NavLink>
          </NavItem>
          <CartSummary />
        </Nav>
      </Collapse>
    </Navbar>
  );
}

export default Navi;

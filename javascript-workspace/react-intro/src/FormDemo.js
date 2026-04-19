import React, { Component } from "react";
import { Button, Form, FormGroup, Label, Input } from "reactstrap";
import alertify from "alertifyjs";

export default class FormDemo extends Component {
  state = {
    email: "",
    password: "",
    city: "",
    description: "",
  };

  handleChange = (event) => {
    let name = event.target.name;
    let value = event.target.value;
    this.setState({ [name]: value });
  };

  handleSubmit = (event) => {
    event.preventDefault();
    alertify.success(this.state.email + " sent via form", 2);
    alertify.success(this.state.password + " sent via form", 2);
    alertify.success(this.state.city + " sent via form", 2);
    alertify.success(this.state.description + " sent via form", 2);
  };

  render() {
    return (
      <div>
        <Form onSubmit={this.handleSubmit}>
          <FormGroup>
            <Label for="email">E-Mail</Label>
            <Input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              onChange={this.handleChange}
            ></Input>
          </FormGroup>
          <FormGroup>
            <Label for="password">Password</Label>
            <Input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              onChange={this.handleChange}
            ></Input>
          </FormGroup>
          <FormGroup>
            <Label for="city">City</Label>
            <Input
              type="select"
              id="city"
              name="city"
              placeholder="Enter your city"
              onChange={this.handleChange}
            >
              <option>Ankara</option>
              <option>İstanbul</option>
              <option>İzmir</option>
            </Input>
          </FormGroup>
          <FormGroup>
            <Label for="description">Description</Label>
            <Input
              type="textarea"
              id="description"
              name="description"
              placeholder="Enter your description"
              onChange={this.handleChange}
            ></Input>
          </FormGroup>
          <Button type="submit" color="primary">
            Save
          </Button>
        </Form>
      </div>
    );
  }
}

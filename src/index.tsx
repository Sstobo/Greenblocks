import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom"
import Header from "./components/ui/Header/Header"
import Footer from "./components/ui/Footer/Footer"

// Header
if (document.querySelector("#react-header")) {
  ReactDOM.render(
  <Header heading="Site Heading"/>, 
  document.querySelector("#react-header"))
}

if (document.querySelector("#react-footer")) {
  ReactDOM.render(
  <Footer heading="Site Footer"/>, 
  document.querySelector("#react-footer"))
}

import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";

const root = ReactDOM.createRoot(document.getElementById("rankMathWidget"));
//const root = ReactDOM.createRoot(document.getElementById("rankMathWidget"));
// root = ReactDOM.createRoot(document.getElementById("root"));

if (typeof root != "undefined" && root != null) {
  root.render(
    <>
      <App />
    </>
  );
}

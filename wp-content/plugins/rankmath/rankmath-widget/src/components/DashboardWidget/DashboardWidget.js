import { React, useState, useEffect } from "react";
import {
  ResponsiveContainer,
  LineChart,
  XAxis,
  YAxis,
  Line,
  CartesianGrid,
} from "recharts";

import axios from "axios";

const DashboardWidget = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    // get the data
    axios
      .get("http://localhost:8888/rankmath/wp-json/rankmath/v1/customer")
      .then((response) => {
        console.log(response.data);
        setData(response.data);
      })
      .catch((err) => {
        console.log("There has been and error: " + err);
      });
  }, []);

  let graph = (
    <section className="container">
      <div className="row mb-3 d-inline">
        <div className="col">
          <span style={{ fontSize: "16px" }}>Graph Widget</span>

          <select style={{ float: "right" }}>
            <option value="7d">Last 7 days</option>
            <option value="15d">15 days</option>
            <option value="30d">1 month</option>
          </select>
        </div>
      </div>
      <div className="card" style={{ minWidth: "100%", minHeight: "100%" }}>
        <ResponsiveContainer width="100%" height={300}>
          <LineChart data={data}>
            <XAxis dataKey="name" />
            <YAxis interval="preserveStartEnd" />
            <CartesianGrid stroke="#eee" strokeDasharray="5 5" />
            <Line type="monotone" dataKey="grossSalary" stroke="#8884d8" />
            <Line type="monotone" dataKey="netSalary" stroke="#82ca9d" />
          </LineChart>
        </ResponsiveContainer>
      </div>
    </section>
  );

  if (data.length < 1) {
    graph = (
      <section>
        <center>
          <h4>No Data to display!</h4>
        </center>
      </section>
    );
  }

  return <>{graph}</>;
};

export default DashboardWidget;

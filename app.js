const express = require("express");
const app =  express();

const productRoutes = require("./api/routes/products");
const staffRoutes = require("./api/routes/staffRoutes");
const saleRoutes = require("./api/routes/saleRoutes");
const orderRoutes = require("./api/routes/orders");

app.use("/products", productRoutes);
app.use("/staff", staffRoutes);
app.use("/sales", saleRoutes);
app.use("/orders", orderRoutes);



module.exports =app;
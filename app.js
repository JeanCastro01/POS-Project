const express = require("express");

const app =  express();


const productRoutes = require("./api/routes/products");
const staffRoutes = require("./api/routes/staff");
const saleRoutes = require("./api/routes/sales");
const orderRoutes = require("./api/routes/orders");







//Routes which should handle requests
app.use("/products", productRoutes);
app.use("/staff", staffRoutes);
app.use("/staff/:staffId", staffRoutes);
app.use("/sales", saleRoutes);
app.use("/orders", orderRoutes);

app.use((req, res, next) =>{
    const error = new Error("Not found");
    error.status(404);
    next(error);
});

app.use((error, req, res, next) =>{
    res.status(error.status || 500);
    res.json({
        error:{
            message: error.message
        }
    })
});

module.exports =app;
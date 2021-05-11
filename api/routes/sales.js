const express = require("express");
const router = express.Router();

router.get("/", (req, res, next) => {
    res.status(200).json({
        message: "Sales were fetched"
    });
});

router.post("/", (req, res, next) => {
    res.status(201).json({
        message: "Sale was created"
    });
});

router.get("/:saleId", (req, res, next) => {
    res.status(200).json({
        message: "Staff details!",
        saleId: req.params.saleId
    });
});

router.delete("/:saleId", (req, res, next) => {
    res.status(200).json({
        message: "Staff deleted!",
        saleId: req.params.saleId
    });
});

module.exports = router;
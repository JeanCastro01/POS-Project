const express = require("express");
const router = express.Router();

//This class handle incoming requests to /orders
router.get("/", (req, res, next) => {
    res.status(200).json({
        message: "Orders were fetched"
    });
});

router.get("/:orderId", (req, res, next) => {
    res.status(200).json({
        message: "Oder details",
        orderId: req.params.orderId
    });
});

router.delete("/:orderId", (req, res, next) => {
    res.status(200).json({
        message: "Order deleted",
        orderId: req.params.orderId
    });
});

module.exports = router;
const express = require("express");
const router = express.Router();

//This class handle incoming requests to /staff

router.get("/", (req, res, next) => {
    res.status(200).json({
        message: "Staffs were fetched"
    });
});

router.post("/", (req, res, next) => {
    res.status(201).json({
        message: "Staff was created"
    });
});

router.get("/:staffId", (req, res, next) => {
    res.status(200).json({
        message: "Staff details",
        staffId: req.params.staffId
    });
});

router.delete("/:staffId", (req, res, next) => {
    res.status(200).json({
        message: "Staff deleted",
        staffId: req.params.staffId
    });
});

module.exports = router;
const express = require("express");
const router = express.Router();
const db = require("../../rc-pos-master/Model/database");

//This class handle incoming requests to /staff

router.get("/", (req, res, next) => {
    db.query("select * from Staff", (error, result, fields) => {
        if (error) {
            return console.log(error);
        }

        return console.log(result);
    });
});

router.post("/", (req, res, next) => {
    res.status(201).json({
        message: "Staff was created"
    });
});

router.get("/:staffId", (req, res, next) => {
    db.query("select * from Staff where StaffID=?",[staffId], (error, result, fields) => {
        if (error) {
            return console.log(error);
        }

        return console.log(result);
    });
});

router.delete("/:staffId", (req, res, next) => {
    res.status(200).json({
        message: "Staff deleted",
        staffId: req.params.staffId
    });
});

module.exports = router;
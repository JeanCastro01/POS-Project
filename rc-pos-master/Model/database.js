//const {createPool} = require("mysql");

const mysql = require("mysql")


//create connection to mysql Database
const db = mysql.createConnection({
    host: "bscy3-pos-database.cwaccadorpob.eu-west-1.rds.amazonaws.com",
    user: "cct",
    password: "Pass1234!",
    database:"POS"
});

//connect
db.connect((err)=>{
    if(err){
        throw err;
    }
    console.log("Mysql Connected");
})

module.exports = db;
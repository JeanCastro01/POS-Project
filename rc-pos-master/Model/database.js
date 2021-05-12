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

// const pool = createPool({
//     host: "bscy3-pos-database.cwaccadorpob.eu-west-1.rds.amazonaws.com",
//     user: "cct",
//     password: "Pass1234!",
//     database:"POS",
//     connectionLimit:15
// });

// pool.query("select * from Customer", (error, result, fields)=>{
// if(error){
//     return console.log(error);
// }
// return console.log(result);
// });



module.exports = db;
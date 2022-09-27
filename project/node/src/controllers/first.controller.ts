import { Request, Response } from "express";
const { performance } = require('perf_hooks');
import data from "../../../data/data.json";
const mysql = require('mysql2');

const connection = mysql.createConnection({
  host: 'localhost',
  port: '4306',
  user: 'root',
  password: "rootsecret",
  database: 'tcc_2022'
});

function selectData() {
  connection.query(
    'SELECT * FROM `data_node`',
    function (err: any, results: any, fields: any) {
      return results;
    }
  );
}

function insertData(parsed: any) {
  parsed.forEach((data: any) => {

  connection.query(`INSERT INTO data_node (isActive, balance, age, name, gender, company, email, phone, address) VALUES 
  (?,?,?,?,?,?,?,?,?)`, [data.isActive, data.balance, data.age, data.name, data.gender, data.company, data.email, data.phone, data.address],
    (error: any, results: any) => {
      if (error) console.log(error); ({ error: error });
    });
  });
  
  return true;
}

class FirstController {
  public home(req: Request, res: Response) {
    var startTime = performance.now()

    const parsed = data as unknown[];
     insertData(parsed);
  

    var endTime = performance.now()
    return res.json({
      response: `Call to insert data took ${endTime - startTime} milliseconds.`
    });
  }
}

export const firstController = new FirstController();
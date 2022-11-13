import { Request, Response } from "express";
const { performance } = require('perf_hooks');
import data from "./data.json";
const mysql = require('mysql2/promise');

// const connection = mysql.createConnection({
//   host: 'localhost',
//   port: '3306',
//   user: 'root',
//   password: "ronalduchi12",
//   database: 'tcc_2022'
// });

async function connect() {
  const connection = await mysql.createConnection({
    host: 'localhost',
    port: '3306',
    user: 'root',
    password: "ronalduchi12",
    database: 'tcc_2022'
  });
  return connection;
}

async function insertData(parsed: any, qtd: number) {
  const conn = await connect();

  for (let i = 0; i < qtd; i++) {
    const data = parsed[i];

    await conn.query(`INSERT INTO data_node (isActive, balance, age, name, gender, company, email, phone, address) VALUES 
    (?,?,?,?,?,?,?,?,?)`, [data.isActive, data.balance, data.age, data.name, data.gender, data.company, data.email, data.phone, data.address],
      (error: any, results: any) => {
        if (error) console.log(error); ({ error: error });
      });
  }

  const [rows] = await conn.query('SELECT COUNT(name) FROM data_node;');
  return rows;

}

class FirstController {
  public async home(req: Request, res: Response) {
    var startTime = performance.now()

    const parsed = data as unknown[];
    const qtd = 5000;
    // const qtd = req.query.qtd || 0;

    await insertData(parsed, qtd);

    var endTime = performance.now()
    return res.json({
      response: `Call to insert ${qtd} took ${endTime - startTime} milliseconds.`
    });
  }
}

export const firstController = new FirstController();

import "reflect-metadata";
import express from 'express';
import bodyParser from 'body-parser';
import { createConnection } from 'typeorm'
import routes from './routes';
import PessoaModel from './models/PessoaModel';

createConnection({
    type: "postgres",
    host: "localhost",
    port: 5432,
    username: 'postgres',
    password: 'admin',
    database: 'minhadb',
    entities: [
        PessoaModel
    ],
    synchronize: true,
    logging: false
}).then(connection => {
     
}).catch(error => {
    console.log('Ocorreu um erro: ',error)
})

const app = express();

app.use(bodyParser.json());
app.use(routes);


app.listen(3030);
console.log("Conexão feita com sucesso !")
console.log("O servidor está funcionando na porta 3030")

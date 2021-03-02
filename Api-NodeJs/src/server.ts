import express from 'express';
import routes from './routes';

const app = express();

app.use(routes);


app.listen(3030);

console.log("O servidor está funcionando na porta 3030")
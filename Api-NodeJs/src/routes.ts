import express, { Router } from 'express';
import PessoaController from './controller/PessoaController';


const routes = express.Router();

const pessoaController = new PessoaController();

routes.get('/pessoa', pessoaController.list);
routes.get("/pessoa/:id", pessoaController.find);
routes.post("/pessoa", pessoaController.create);

export default routes;
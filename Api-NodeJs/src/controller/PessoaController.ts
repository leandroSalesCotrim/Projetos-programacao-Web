import {Request, Response} from 'express';

class PessoaController {

    async list(req: Request, res: Response){
        return res.json({ title: "Hello Controller"})

    }
    
    async find(req: Request, res: Response){
        return res.json({ title: "Hello Controller"})
    }


    async create(req: Request, res: Response){
        return res.json({ title: "Hello Controller"})
    }
}
export default PessoaController;
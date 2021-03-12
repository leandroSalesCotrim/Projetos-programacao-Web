import {Request, Response} from 'express';
import { getManager, Repository } from 'typeorm'
import PessoaModel from '../models/PessoaModel';

class PessoaController {

    async list(req: Request, res: Response){
        const pessoaReposity: Repository<PessoaModel> = getManager().getRepository(PessoaModel);

        const pessoaId: number = Number(req.params.id);
        const pessoa = await pessoaReposity.find();
       
       
        return res.json({pessoas: pessoa})

    }
    
    async find(req: Request, res: Response){
        const pessoaReposity: Repository<PessoaModel> = getManager().getRepository(PessoaModel);

        const pessoaId: number = Number(req.params.id);
        const pessoa = await pessoaReposity.findOne(pessoaId);
       
       
        return res.json({pessoas: pessoa})
    }


    async create(req: Request, res: Response){
        const pessoaReposity: Repository<PessoaModel> = getManager().getRepository(PessoaModel);
        const novaPessoa = new PessoaModel();
        novaPessoa.nome = req.body.nome;
        novaPessoa.sobrenome = req.body.sobrenome;
        novaPessoa.cpf = req.body.cpf;

        console.log('Nova pessoa é :', novaPessoa);
        
        const pessoaAdd  = await pessoaReposity.save(novaPessoa);

        return res.json({message: 'usuario Adicionado com sucesso', pessoas: pessoaAdd })
    }
}
export default PessoaController;
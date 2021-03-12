import{ Column, Entity, PrimaryGeneratedColumn} from 'typeorm'

@Entity({name: 'tb_pessoa'})
export default class Pessoa{
    @PrimaryGeneratedColumn({name: 'id'})
    id: number;
    
    @Column({name: 'nome'})
    nome: string;
    
    @Column({name: 'sobrenome'})
    sobrenome: string;
    
    @Column({name: 'cpf', length: '11'})
    cpf: string;
}
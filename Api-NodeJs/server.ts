import express from 'express';

const app = express();

app.get("/teste", (req, res) =>{
    res.json({title: 'OK!'})
})
app.listen(3030);
console.log("O servidor está funcionando na porta 3030")
function Calcular() {
    var  produto = (document.getElementById("slcProd").value);

    var preco = 0;
    var valorfinal= parseFloat(document.getElementById("txtResultado").value) ;

    if (produto == 1) {
        preco=39.99;
        valortotal=preco;
    }
    else if (produto == 2) {
        preco=59.89;
        valortotal=preco;
        
    }
    else if (produto == 3) {
        preco=99.00;
        valortotal=preco;
    }
    else if (produto == 4) {
        preco=29.90;
        valortotal=preco;
        
    }
    else if (produto == 5) {
        preco=45.90;
        valortotal=preco;
    }
    else if (produto == 6) {
        preco=45.00;
        valortotal=preco;
        
    }
    else if (produto == 7) {
        preco=149.99;
        valortotal=preco;
    }
    else if (produto == 8) {
        preco=39.99;
        valortotal=preco;
        
    }
    else if (produto == 9) {
        preco=69.90;
        valortotal=preco;
    }
    else if (produto == 10) {
        preco=45.00;
        valortotal=preco;
        
    }

    parseFloat(document.getElementById("txtResultado").value = "R$"+ preco);

   
    
}


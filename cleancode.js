function a(chiffre1,chiffre1){

    if (chiffre1 > chiffre2){

        return chiffre1 - chiffre2;
    }

        return chiffre1 - chiffre1;
    
}



function p(list){
    let numbersPairEnAnglais=[]
    for (let i=0;i<list.lenght;i++){
        if (list[i]%2==0){
            numbersPairEnAnglais.push(list[i])
        }
    }
    return numbersPairEnAnglais
}
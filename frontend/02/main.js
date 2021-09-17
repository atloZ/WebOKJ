// csak ha betöltött a html file akkor fut le
document.addEventListener("DOMContentLoaded",() => {
    // Hivatkozás az elemre
    let elem = document.getElementById("bekezdes");
    console.log(elem);

    elem.addEventListener("click", (e) =>{
        // window.alert("klikk");
        console.log(e);
    });

    document.getElementById("szoveg")
            .addEventListener("input", (e) => {
                console.log(e.target.value);
            })

    try {
        // megprobál
    } catch (error) {
        // hibát elkap
    } finally{
        // mindenkép lefut
    }
    
    // // Változok létrehozása
    let i = 5;
    // const c = "hello";
    
    // // Tömb létrehozása
    // const t = [ 1, 3003, 45 ];
    // const vegyes = [ 1, "asd", true ];
    // t[1] = 0;
    // t.push(-5);
    // console.log(t);
    // // Ez hibás
    // // t = [];
    
    // console.log(5 / 2);
    
    // const obj = {
    //     nev: "bela",
    //     eletkor: 3,
    //     fajta: "kutya"
    // };
    
    // obj. eletkor++;
    // console.log(obj.fajta);
    
    if (i > 4) {
        // let csak az adott scopban(scop=="{}") érhető el
        let valtozo = 5;
        var valtozo2 = 45;
    } else if(i > 0){
        
    } else {
        
    }
    console.log(valtozo2);
    console.log(valtozo);
    
    // for (let j = 0; j < 10; j++) {
        
    // }
    
    // while (i > 15) {
    //     i += 2;
    // }
    
    // // while (i > 100) {
    //     // }
});

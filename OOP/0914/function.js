// // példa ciklus létre hozás
//     function szamol(metol, meddig) {
//         if (metol > meddig) {
//             return;
//         }
//         else{
//             console.log(metol);
//             szamol(metol+1, meddig);
//         }
//     }

// // ciklus meghívás
//     szamol(1, 10);

// // fügvény megvalositási modok
//     // 1
//         function kiir(e) {
//             console.log(e*2);
//         }
//     // 2
//         szamol(1, 10, kiir);
//     // 3
//         szamol(1, 10, (e)=> console.log(e*2));
//     // 4
//         let kiir = (e)=> console.log(e*2);

// // Funkciónális kifejezés
//     console.log(Math.abs(-5656)+i);

// // Nem funkcionális
//     console.log(Math.random());

// lamda
    let t = [1000,20000,3000,400];
    let t1 = t.filter(
        (e) => {
            return e < 1000;
        }
    );
    // vagy
    let t2 = t.filter((e) => e < 1000)
                .map((e) => e * 1000)
                .sort();
    console.log(t2);

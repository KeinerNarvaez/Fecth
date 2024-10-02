
window.addEventListener('DOMContentLoaded', ()=>{
    var sonido = new Audio();
    sonido.src= `../sonido.mp3`; 
    const form = document.getElementById('formOperaciones');
    const mostrar1 = document.getElementById('resultado1');
    const mostrar2 = document.getElementById('resultado2');
    const mostrar3 = document.getElementById('resultado3');

    form.addEventListener('submit', (event)=>{
        event.preventDefault();
        sonido.play();
        let cuadrado = document.getElementById('txtcuadrado').value;
        let triangulos1 = document.getElementById('txtladot').value;
        let triangulos2=document.getElementById('txtbaset').value;
        let rectangulo1 = document.getElementById('txtlador').value;
        let rectangulo2= document.getElementById('txtbaser').value;

        const dataOperaciones = {
            triangulos1,
            triangulos2,
            rectangulo1,
            rectangulo2,
            cuadrado
        }

        fetch('php/register.php',{
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataOperaciones)
        })
        .then(response => response.json())
        .then(data =>{
            let primerprint = "";
            let segundoprint="";
            let tercerprint="";
            data.forEach(oper=>{
                primerprint = `
                <p style="margin-top: 63px; margin-left:120px;">${cuadrado}</p>
                <div class="pd">
                <div id="cuadrado">
                <p style="margin-top: 30px;">${oper.cuadrado}</p>
                </div>
                <p style="margin-left:30px; margin-top:10px;">${cuadrado}</p>
                </div>
                `;
                segundoprint=`
                <p style="margin-top: 63px; margin-left:130px">${triangulos1}</p>
                <div class="pd"><div id="triangulo">
                <p style="padding-top:60px;">${oper.triangulo}</p>
                </div>
                <p style="margin-left:22px; margin-top:10px;">${triangulos2}</p>
                </div>
                `
                tercerprint=`
                <p style="margin-top: 63px; margin-left:90px;">${rectangulo1}</p>
                <div class="pd">
                <div id="rectangulo">
                <p style="margin-top: 30px;">${oper.rectangulo}</p>
                </div>
                <p style="margin-left:45px; margin-top:10px;">${rectangulo2}</p></div>
                `
                
            })

            mostrar1.innerHTML=primerprint;
            mostrar2.innerHTML=segundoprint;
            mostrar3.innerHTML=tercerprint;
        })
        .catch(error =>{
            console.log(error)
        })
    })  

})















// 'Content-Type': 'application/json'
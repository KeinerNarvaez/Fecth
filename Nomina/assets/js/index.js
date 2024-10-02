
window.addEventListener('DOMContentLoaded', ()=>{
    var sonido = new Audio();
    sonido.src= `../sonido.mp3`; 
    const form = document.getElementById('formOperaciones');
    const mostrar= document.getElementById('resultado');

    form.addEventListener('submit', (event)=>{
        event.preventDefault();
        sonido.play();
        let valorDia = document.getElementById('txtvalordia').value;
        let dias = document.getElementById('txtdias').value;


        const dataOperaciones = {
            dias,
            valorDia
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
            let print = "";
            data.forEach(oper=>{
                print = `
                    <strong>Total salario: ${oper.salario}</strong><br>
                    <strong>Transporte: ${oper.transporte}</strong><br>
                    <strong>Pago de salud: ${oper.salud}</strong><br>
                    <strong>Pago pensión: ${oper.pension}</strong><br>
                    <strong>Deducible: ${oper.deducible}</strong><br>
                    <strong>ARL: ${oper.arl}</strong><hr>
                    <strong>Pago total: ${oper.totalPagar}</strong>
                `
                
            })

            mostrar.innerHTML=print;
        })
        .catch(error =>{
            console.log(error)
        })
    })  

})















// 'Content-Type': 'application/json'
alert('main');

btn_test.addEventListener('click', (e) => {
    e.preventDefault();
    listarCargos(); 

  
});

btn_cancelar.addEventListener('click', (e) => {
    e.preventDefault();
    modal2.classList.remove('modal-mostrar');
});

btn_agregar.addEventListener('click', (e) => {
    e.preventDefault();
    obtenerCargoSeleccionado();
});

btn_eliminar2.addEventListener('click', (e) => {
  
    alert('eliminando...');
});

function listarCargos(){
    $.ajax({
        url:'/intranet/index-json',
        type: 'GET',
        dataType: 'json',
        success: function(datos){
            console.log(datos.data);
            pintarCargos(datos.data);
            modal2.classList.add('modal-mostrar');
        }
    });
}


function enviarListaEliminadosCargos(){
    var datos = {
        'id1': 1,
        'id2': 2,
        'id3': 3
    }

    $.ajax({
        url:'/intranet/prueba-post',
        type: 'POST',
        dataType: 'json',
        success: function(datos){
            console.log(datos.data);
            pintarCargos(datos.data);
            modal2.classList.add('modal-mostrar');
        }
    });
}



function pintarCargos(json){
   
    let tabla = document.querySelector('#tbody_empleado_cargo');
    tabla.innerHTML = '';
    for(let fila of json){
        let tr = document.createElement('TR');

        let td1 = document.createElement('TD');
        let td2 = document.createElement('TD');
        let td3 = document.createElement('TD');
        let td4 = document.createElement('TD');


        let input = document.createElement('input');
        input.type = "radio";
        input.name = "id_cargo";
        input.value = fila.id;
        let txt2 = document.createTextNode(fila.id);
        let txt3 = document.createTextNode(fila.cargo);
        let txt4 = document.createTextNode(fila.descripcion);

        td1.appendChild(input);
        td2.appendChild(txt2);
        td3.appendChild(txt3);
        td4.appendChild(txt4);

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);

        tabla.appendChild(tr);
    }


}

function obtenerCargoSeleccionado(){

    let tr = document.querySelectorAll('TBODY TR');
    let td;
    let input;
    let dato_cargo;
    for(let i = 0; i < tr.length; i++){
        td = tr[i].querySelectorAll('TD');
        input = td[0].querySelector('INPUT');
       
        if(input.checked){
            console.log(input);

            id_car.value = input.value;
             dato_cargo = td[2].innerText;
            cargo_dato.value = dato_cargo;


            modal2.classList.remove('modal-mostrar');


            return;
        }
    }
}
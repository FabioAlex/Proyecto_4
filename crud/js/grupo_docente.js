addEventListener("DOMContentLoaded", async(e)=>{
    let data = JSON.parse(localStorage.getItem("Usuario"));
    let json = {
        grupo_docente: data.id_docente,
        metodo: "GrupoDocente"
    };

    let config = {
        method: "POST", 
        body: JSON.stringify(json)
    }; 
    let peticion = await fetch("http://localhost/Proyecto_4/php_others/api.php",config);
    let res = await peticion.json();
    let head = Object.keys(res.Data[0]), headtH="", bodytH="";
    for (let id of head) {
        headtH += ` <th>${id}</th>`   
    }
    document.querySelector("#idHead").insertAdjacentHTML("beforeend", `${headtH}<th>Acción</th>`)
    for (let [id, val] of Object.entries(res.Data)) {
        bodytH += `<tr>`;
        for ( [id, data] of Object.entries(val)) {
            bodytH += ` <td>${data}</td>`;
        }
        bodytH += `<td><input type="submit" value="Ingresar" id="open">
        <div id="modal_container" class="modal-container">
            <div class="modal">
                <h1>Ventana Modal</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque assumenda dignissimos illo explicabo natus quia repellat, praesentium voluptatibus harum ipsam dolorem cumque labore sunt dicta consectetur, nesciunt maiores delectus maxime?</p>
                <button class="button" id="close">Cerrar</button>
            </div>
        </div>
        </input></td></tr>`;
    }
    document.querySelector("#idbody").insertAdjacentHTML("beforeend", bodytH)


// Cuadro de dialogo    
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});
})


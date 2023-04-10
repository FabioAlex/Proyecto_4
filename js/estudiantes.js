addEventListener("DOMContentLoaded", async(e)=>{
    let from = document.querySelector("#form");
    from.addEventListener("submit", async(e)=>{
        e.preventDefault();
        let input = new FormData(e.target);
        let json = Object.fromEntries(input.entries());
        json.metodo = from.dataset.metodo;
        let config = {
            method: from.method, 
            body: JSON.stringify(json)
        };
        let peticion = await fetch(from.action,config);
        let res = await peticion.json();




        if (res.Data.id_estudiante) {
            
            localStorage.setItem("Usuario", JSON.stringify(res.Data));
                location.href ="../crud/index.php";
    }else{

        document.querySelector("#warnings").innerHTML = `${res.Mensaje}`;

    }


        




    })


})
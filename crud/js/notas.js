addEventListener("DOMContentLoaded", async(e)=>{
    let data = JSON.parse(localStorage.getItem("Usuario"));
    let json = {
        user: data.id_estudiante,
        metodo: "notas"
    };

    let config = {
        method: "POST", 
        body: JSON.stringify(json)
    }; 
    let peticion = await fetch("http://localhost/Proyecto_4/php_others/api.php",config);
    let res = await peticion.json();
    console.log(res);
})
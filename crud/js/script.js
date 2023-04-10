setTimeout(() => {
    if (localStorage.getItem("Usuario")) {
        console.log(null);
    }else{
        location.href = "../index.php";
    }
}, 500);
document.querySelector("#header__button").addEventListener("click", ()=>{
    if (JSON.parse(localStorage.getItem("Usuario")).id_estudiante) {
        localStorage.clear("Usuario");
        location.href = "../menu_items/estudiantes.php";
    }else if (JSON.parse(localStorage.getItem("Usuario")).id_docente) {
        localStorage.clear("Usuario");
        location.href = "../menu_items/docentes.php";
    }
   
});

if (JSON.parse(localStorage.getItem("Usuario")).id_estudiante) {
    localStorage.getItem("root", true);
}else if (JSON.parse(localStorage.getItem("Usuario")).id_docente) {
    localStorage.getItem("root", false);
}
// Menu desplegable
document.getElementById("btn_open").addEventListener("click", open_close_menu);

var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

function open_close_menu(){
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu__side_move");
}

if(window.innerWidth < 760){
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

window.addEventListener("resize", function(){
    
    if(window.innerWidth > 760){
        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if(window.innerWidth < 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});
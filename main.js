addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method : "GET"
    };
    let peticio = await fetch("app.php", config);
    let data = await peticio.text();
    document.querySelector("#mensaje").innerHTML = data;
})
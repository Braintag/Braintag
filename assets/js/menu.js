function handleMenu() {
    const menu = document.querySelector(".menu");
    const opacity = document.querySelector(".menu__opacity");
    

    if (menu.style.display == "none") {
        menu.style.display = "block";
        opacity.style.backgroundColor = "red";
        menu.style.zIndex = "10";
    
    } else {
        menu.style.display = "none";
        opacity.style.backgroundColor = "#0000";
        menu.style.zIndex = "0";



    }
}
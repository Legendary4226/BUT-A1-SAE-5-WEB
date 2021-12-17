function toggle_top_menu() {
    let selected = document.getElementById("cube-3D").classList;
    selected.toggle("menu-on");
    selected.toggle("hover-animation")
};

function phone_tablet_left_menu() {
    let selected = document.querySelector("nav.sub-left-menu");
    selected.classList.toggle("sub-left-menu-on");

    selected = document.getElementById("open-close-sub-left-menu");
    selected.classList.toggle("on");
}
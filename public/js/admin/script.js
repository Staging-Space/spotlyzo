window.addEventListener("DOMContentLoaded", () => {
    if (window.localStorage.getItem("look") === null)
        window.localStorage.setItem("look", "light");
});
window.addEventListener("DOMContentLoaded", () => {
    let look = window.localStorage.getItem("look");
    let html = document.querySelector("html");
    let icon = document.querySelector("#mode i");
    let logo = document.querySelector("#logo");
    if (look === "light") {
        html.setAttribute("data-bs-theme", "light");
        if (icon) icon.setAttribute("class", "fa-solid fa-sun");
        if (logo) logo.setAttribute("src", "../../images/admin/logo-2.svg");
    } else {
        html.setAttribute("data-bs-theme", "dark");
        if (icon) icon.setAttribute("class", "fa-solid fa-moon");
        if (logo) logo.setAttribute("src", "../../images/admin/logo-1.svg");
    }
    let mode = document.querySelector("#mode");
    if (mode) {
        mode.addEventListener("click", (e) => {
            e.preventDefault();
            if (html.getAttribute("data-bs-theme") === "light") {
                window.localStorage.setItem("look", "dark");
                html.setAttribute("data-bs-theme", "dark");
                if (icon) icon.setAttribute("class", "fa-solid fa-moon");
                if (logo)
                    logo.setAttribute("src", "../../images/admin/logo-1.svg");
            } else {
                window.localStorage.setItem("look", "light");
                html.setAttribute("data-bs-theme", "light");
                if (icon) icon.setAttribute("class", "fa-solid fa-sun");
                if (logo)
                    logo.setAttribute("src", "../../images/admin/logo-2.svg");
            }
        });
    }
});
window.addEventListener("DOMContentLoaded", () => {
    let back = document.getElementById("back");
    if (back) {
        back.addEventListener("click", (e) => {
            e.preventDefault();
            window.history.go(-1);
        });
    }
});

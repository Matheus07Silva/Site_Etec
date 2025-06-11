document.documentElement.classList.add("js-ready");

document.addEventListener("DOMContentLoaded", function () {
    const savedTheme = localStorage.getItem("theme");
    const body = document.body;
    const button = document.getElementById("themeToggle");
    const logo = document.querySelector(".navbar-brand img");

    if (savedTheme === "dark") {
        body.classList.add("dark-mode");
        button.innerHTML = "☀️";
        if (logo) logo.src = "/images/Logo_Etec_dark.png";
    } else {
        body.classList.remove("dark-mode");
        button.innerHTML = "🌙";
        if (logo) logo.src = "/images/Logo_Etec.png";
    }
});

// Alterna o tema e salva no localStorage
function toggleTheme() {
    const body = document.body;
    const button = document.getElementById("themeToggle");
    const logo = document.querySelector(".navbar-brand img");

    body.classList.toggle("dark-mode");

    if (body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
        button.innerHTML = "☀️";
        if (logo) logo.src = "/images/Logo_Etec_dark.png";
    } else {
        localStorage.setItem("theme", "light");
        button.innerHTML = "🌙";
        if (logo) logo.src = "/images/Logo_Etec.png";
    }
}

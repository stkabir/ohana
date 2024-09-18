function toggleSidebar() {
    document.querySelector("#sidebar").classList.toggle("expand");

    const sidebar = document.getElementById('sidebar');
    const main = document.querySelector('.main');
    const btn = document.getElementById('btn-sidebar');
    if (sidebar.style.left === "0px" || sidebar.style.left == '') {
        sidebar.style.left = '-260px'; // Cierra el sidebar
        main.style.marginLeft = '0';
        btn.classList.remove("bi-arrow-left");
        btn.classList.add("bi-list");
    }
    else {
        sidebar.style.left = '0px'; // Abre el sidebar
        main.style.marginLeft = '260px';
        btn.classList.remove("bi-list");
        btn.classList.add("bi-arrow-left");
    }
}
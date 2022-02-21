//------ form model --------//
let reg = document.querySelector(".register"),
    log = document.querySelector(".log-in");
let regBtn = document.getElementById("reg"),
    logBtn = document.getElementById("log");

$(regBtn).click(function () {
    regBtn.classList.add("cust-active");
    logBtn.classList.remove("cust-active");
    $(reg).fadeIn(500);
    $(log).fadeOut(500, function () {
        log.classList.remove("d-none");

    });
});

$(logBtn).click(function () {
    logBtn.classList.add("cust-active");
    regBtn.classList.remove("cust-active");
    $(log).fadeIn(500);
    $(reg).fadeOut(500, function () {
        log.classList.remove("d-none");

    });
});


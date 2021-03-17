    const screen = document.querySelector(".screen");

    const screen1 = document.querySelector(".s_t-bar");

    const modelShow = document.querySelector(".icone1");

    const modelShow2 = document.querySelector("#update");

    const container = document.querySelector(".blur");

    const close = document.querySelector(".close");

    const add = document.querySelector("#btn");

    modelShow.onclick = function () {
      screen.style.transform = "translateY(10%)";
      container.style.filter = "blur(10px)";
    };

    modelShow2.onclick = function () {
      screen.style.transform = "translateY(10%)";
      container.style.filter = "blur(10px)";
    };

    close.onclick = function () {
      screen.style.transform = "translateY(-100%)";
      container.style.filter = "none";
    };

    add.onclick = function () {
      screen.style.transform = "translateY(-100%)";
      container.style.filter = "none";
    };
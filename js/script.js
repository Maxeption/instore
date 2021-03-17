var burgerbtn = document.querySelector(
  "body > div > div > div.side-bar > div.burger"
);
var sidebar = document.querySelector("body > div > div > div.side-bar");
var profil = document.querySelector(
  "body > div > div > div.side-bar > div.profil"
);
var p_list = document.querySelector(
  "body > div > div > div.side-bar > div.page_li"
);
var p_list2 = document.querySelector(
  "body > div > div > div.side-bar > div.page_li > ul"
);

burgerbtn.addEventListener("click", function () {
  // sidebar.style.width = "264px";
  // profil.style.transform = "translateX(0px)";
  // p_list.style.transform = "translateX(0px)";
  // p_list2.style.transform = "translateX(0px)";

  sidebar.classList.toggle("toright");
  profil.classList.toggle("torightX");
  p_list.classList.toggle("torightX");
  p_list2.classList.toggle("torightX");
  
  burgerbtn.classList.toggle("burgeraf");
  document.querySelector("body > div > div > div.side-bar > div.burger > div.line1").classList.toggle("lineaf1");
  document.querySelector("body > div > div > div.side-bar > div.burger > div.line2").classList.toggle("lineaf2");
  document.querySelector("body > div > div > div.side-bar > div.burger > div.line3").classList.toggle("lineaf3");

});

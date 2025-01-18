let informationsVisible = true;
let informations = document.getElementById("informations");
let plusIcon = document.getElementById("addition");

plusIcon.addEventListener("click", () => {
  if (!informationsVisible) {
    informations.classList.remove("hidden");
    plusIcon.classList.remove("bi-plus-square");
    plusIcon.classList.add("bi-dash-square");
  } else {
    informations.classList.add("hidden");
    plusIcon.classList.remove("bi-dash-square");
    plusIcon.classList.add("bi-plus-square");
  }

  informationsVisible = !informationsVisible;
});
// console.log(informationsVisible);

let ExamensVisible = true;
let InfoExm = document.getElementById("InfoExm");
let SousIcon = document.getElementById("Soustraction");
SousIcon.addEventListener("click", () => {
  if (!ExamensVisible) {
    InfoExm.classList.remove("hidden");
    SousIcon.classList.remove("bi-plus-square");
    SousIcon.classList.add("bi-dash-square");
  } else {
    InfoExm.classList.add("hidden");
    SousIcon.classList.remove("bi-dash-square");
    SousIcon.classList.add("bi-plus-square");
  }

  ExamensVisible = !ExamensVisible;
});

let Identifiant = document.getElementById("Identifiant");
Identifiant.addEventListener("change", function () {
  document.getElementById("formIdentifiant").submit();
});

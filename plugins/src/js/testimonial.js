// Slider Desktop
let tslides = document.querySelectorAll(".t-slide-ana>div");
let tslideSayisi = tslides.length;
let tprev = document.getElementById("tprev");
let tnext = document.getElementById("tnext");
for (let index = 0; index < tslides.length; index++) {
    const element = tslides[index];
    element.style.transform = "translateX(" + 100 * index + "%)";
}
let tloop = 0 + 1000 * tslideSayisi;

function gotnext() {
    tloop++;
    for (let index = 0; index < tslides.length; index++) {
        const element = tslides[index];
        element.style.transform = "translateX(" + 100 * (index - (tloop % tslideSayisi)) + "%)";
    }
}

function gotprev() {
    tloop--;
    for (let index = 0; index < tslides.length; index++) {
        const element = tslides[index];
        element.style.transform = "translateX(" + 100 * (index - (tloop % tslideSayisi)) + "%)";
    }
}

tnext.addEventListener("click", gotnext);
tprev.addEventListener("click", gotprev);

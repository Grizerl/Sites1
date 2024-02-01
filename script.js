const content1 = document.querySelector(".content-1");
const content2 = document.querySelector(".content-2");
const content3 = document.querySelector(".content-3");
const content4 = document.querySelector(".content-4");
const foto = document.querySelector(".foto-main-1");
const body = document.querySelector(".body-1");
const bodysection = document.querySelector(".body-section-1");
const bodysectioncontent = document.querySelector(".body-section-content-1");

function resetStyles() {
    [content1, content2, content3, content4].forEach(content => {
        content.style.backgroundColor = "";
        content.style.color = "";
    });

    [foto, body, bodysection, bodysectioncontent].forEach(element => {
        element.style.display = "none";
    });
}

content1.addEventListener("click", () => {
    resetStyles();
    content1.style.backgroundColor = "#2f313f";
    content1.style.color = "#fff";
    foto.style.display = "block";
});

content2.addEventListener("click", () => {
    resetStyles();
    content2.style.backgroundColor = "#2f313f";
    content2.style.color = "#fff";
    body.style.display = "block";
});

content3.addEventListener("click", () => {
    resetStyles();
    content3.style.backgroundColor = "#2f313f";
    content3.style.color = "#fff";
    bodysection.style.display = "block";
});

content4.addEventListener("click", () => {
    resetStyles();
    content4.style.backgroundColor = "#2f313f";
    content4.style.color = "#fff";
    bodysectioncontent.style.display = "block";
});

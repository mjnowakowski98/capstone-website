addEventListener("resize", () => {
    let headerHeight = document.querySelector("header").clientHeight;
    let footerHeight = document.querySelector("footer").clientHeight;
    console.log(headerHeight, footerHeight);

    let contentArea = document.querySelector("#editor-contentarea");
    contentArea.style.height = window.innerHeight - (headerHeight + footerHeight);
});
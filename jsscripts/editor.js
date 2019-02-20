// Tmp WebSocket Client
const ctx = document.querySelector("canvas").getContext("2d"); 
const bufferImage = document.querySelector("img");

let animationKey = null;

function onWindowResize() {
    let headerHeight = document.querySelector("header").clientHeight;
    let footerHeight = document.querySelector("footer").clientHeight;
    console.log(headerHeight, footerHeight);

    let contentArea = document.querySelector("#editor-contentarea");
    contentArea.style.height = (window.innerHeight - 2 - (headerHeight + footerHeight)) + 'px';
}

function updateCanvas() {
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    ctx.drawImage(bufferImage, 0, 0);
    requestAnimationFrame(updateCanvas);
}

let socket = null;
addEventListener("load", () => {
    socket = new WebSocket("ws://localhost", "json");
    socket.addEventListener("open", () => {
        console.log("Connection opened");
        updateCanvas();
    });
    
    socket.addEventListener("message", (evt) => {
        let serverMessage = JSON.parse(evt.data);
        switch(serverMessage.action) {
            case "newConnection":
            animationKey = server.serverMessage.extended.animationKey;
                break;
    
            case "render":
                bufferImage.src = serverMessage.extended.frameDate;
                break;
    
            default:
                break;
        }
    });

    onWindowResize();
    addEventListener("resize", () => onWindowResize());
});
// Tmp WebSocket Client
// Super jenky wiring tests :D
const ctx = document.querySelector("canvas").getContext("2d"); 
const bufferImage = document.querySelector("img");

let animationKey = null;
let isRendering = false;

let socket = null;

let testComm = document.querySelector(".comm-addlayer");
testComm.addEventListener("click", () => {
    let commDesc = new CommandDescriptor("createLayer", { containerKey:animationKey, name:"Test Layer" });
    socket.send(JSON.stringify(commDesc));
});

function onWindowResize() {
    let headerHeight = document.querySelector("header").clientHeight;
    let footerHeight = document.querySelector("footer").clientHeight;
    console.log(headerHeight, footerHeight);

    let contentArea = document.querySelector("#editor-contentarea");
    contentArea.style.height = (window.innerHeight - 2 - (headerHeight + footerHeight)) + 'px';
}

function updateCanvas() {
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    if(bufferImage.src) ctx.drawImage(bufferImage, 0, 0);
    requestAnimationFrame(updateCanvas);
}

addEventListener("load", () => {
    socket = new WebSocket("ws://localhost/", "json");
    socket.addEventListener("open", () => {
        console.log("Connection opened");
        updateCanvas();
    });
    
    socket.addEventListener("message", (evt) => {
        let serverMessage = JSON.parse(evt.data);
        switch(serverMessage.action) {
            case "newConnection":
                animationKey = serverMessage.extended.animationKey;
                break;
    
            case "render":
                bufferImage.src = serverMessage.extended.frameData;
                break;
    
            default:
                console.log(serverMessage.action);
                break;
        }
    });

    socket.addEventListener("close", () => {
        console.log("Connection closed");
    });

    socket.addEventListener("error", (err) => {
        console.error(err);
        socket.close();
    });

    onWindowResize();
    addEventListener("resize", () => onWindowResize());
});
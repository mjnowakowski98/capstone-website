// Tmp WebSocket Client
// Super jenky wiring tests :D
const ctx = document.querySelector("canvas").getContext("2d"); 
const bufferImage = document.querySelector("img");

let animationKey = null;
let isRendering = false;

let socket = null;
let animation = null;

let testComm = document.querySelector(".comm-addlayer");
testComm.addEventListener("click", () => {
    let commDesc = new CommandDescriptor("createLayer", { containerKey:animationKey, name:"Test Layer" });
    socket.send(JSON.stringify(commDesc));
});

function updateCanvas() {
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    if(bufferImage.src) ctx.drawImage(bufferImage, 0, 0);
    requestAnimationFrame(updateCanvas);
}

function updateLayersPanel(root) {
    
}

function setSocket(instanceUrl) {
    socket = new WebSocket(instanceUrl, "json");
    socket.addEventListener("open", () => {
        console.log("Connection opened");
        updateCanvas();
    });
    
    socket.addEventListener("message", (evt) => {
        let serverMessage = JSON.parse(evt.data);
        switch(serverMessage.action) {
            case "newConnection":
                console.log(serverMessage.extended.animationKey);
                animation = new AnimObj(serverMessage.extended.animationKey, "layercontainer");
                break;
    
            case "render":
                bufferImage.src = serverMessage.extended.frameData;
                break;

            case "getChildren":

                break;

            case "createObject":

                break;

            case "deleteObject":

                break;

            case "information":
                console.log(serverMessage.extended.message);
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
}

addEventListener("load", () => {
    let instanceInput = document.querySelector("#settings-engineinstance");
    setSocket(instanceInput.value);
});
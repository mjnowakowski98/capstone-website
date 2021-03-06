function executePageAction() {
    let pageAction = document.querySelector("body").dataset.pageAction;
    switch(pageAction) {
        case "signInFailed":
            $("#signInModal").modal("show");
            break;

        case "signUpFailed":
            $("#signUpModal").modal("show");
            break;

        default:
            break;
    }
}

function setLoginStateUI() {
    let loginState = document.querySelector("body").dataset.loginState;
    let showItems = document.querySelectorAll(`.${loginState}`);
    for(let i = 0; i < showItems.length; i++)
        showItems[i].classList.remove("d-none");
}

addEventListener("load", () => {
    setLoginStateUI();
    executePageAction();
});
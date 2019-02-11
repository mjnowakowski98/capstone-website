function executePageAction() {
    let pageAction = document.querySelector("body").dataset.pageAction;
    switch(pageAction) {
        case "signInFailed":
            $("#signInModal").modal("show");
            break;

        default:
            $("#signUpModal").modal("show");
            break;
    }
}

addEventListener("load", () => {
    executePageAction();
});
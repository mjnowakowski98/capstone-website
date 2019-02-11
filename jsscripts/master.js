function executePageAction() {
    let pageAction = document.querySelector("body").dataset.pageAction;
    switch(pageAction) {
        case "signInFailed":
            $("#signInModal").modal("show");
            break;

        case "singUpFailed":
            $("#signUpModal").modal("show");
            break;

        default:
            break;
    }
}

addEventListener("load", () => {
    executePageAction();
});
function toggleAuthItems(items) {
    for(let i = 0; i < items.length; i++) items[i].classList.remove("d-none");
}

addEventListener("load", () => {
    let navNoUsers = document.querySelectorAll(".no-user");
    let navBasicUsers = document.querySelectorAll(".basic-user");
    let navAdminUsers = document.querySelectorAll(".admin-user");

    let loginState = document.querySelector("body").dataset.loginState;
    switch(loginState) {
        case "basic-user":
            toggleAuthItems(navBasicUsers);
            break;

        case "admin-user":
            toggleAuthItems(navAdminUsers);
            break;

        case "no-user":
        default:
            toggleAuthItems(navNoUsers);
            break;
    }
});
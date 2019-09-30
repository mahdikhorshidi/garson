/**
 * Created by mkhorshidi on 30/09/2019.
 */
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("app").style.marginRight = "250px";
    document.getElementById("app").style.marginLeft = "-250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("app").style.marginRight = "0";
    document.getElementById("app").style.marginLeft = "0";
}

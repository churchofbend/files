function when() {
const d = new Date();
let y = d.getFullYear();
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const w = d.getDate();
document.getElementById("stamp").innerHTML = w + '&nbsp;' + months[d.getMonth()] + ',&nbsp;' + y;
}
document.addEventListener("DOMContentLoaded", function() {
    const togglePassword = document.getElementById("togglePassword");
    const passwordField = document.getElementById("password");

    togglePassword.addEventListener("click", function() {
        const type = passwordField.getAttribute("type") === "password"
        ? "text"
        : "password";
        passwordField.setAttribute("type", type);
        this.innerHTML = type === "password"
        ? '<img src="../assets/images/eye-slash.png" style="width: 17px; height: auto; margin-top: 5px;">'
        : '<img src="../assets/images/eye.png" style="width: 17px; height: auto; margin-top: 5px;">';
    });
});
// Mostrar ou ocultar senha
document.querySelectorAll("input[type='checkbox']").forEach(checkbox => {
    checkbox.addEventListener("change", function () {
        const input = this.parentNode.parentNode.querySelector("input[type='password']");
        if (input) input.type = this.checked ? "text" : "password";
    });
});

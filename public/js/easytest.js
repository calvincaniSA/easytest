document.addEventListener("DOMContentLoaded", function () {
    const messageContainer = document.getElementById("messageContainer");

    if (messageContainer && messageContainer.innerHTML.trim() !== "") {
        setTimeout(function () {
            messageContainer.style.display = "none";
        }, 3000);
    }
});

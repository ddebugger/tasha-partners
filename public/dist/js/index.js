function showModal() {
    document.getElementById("myModal").style.display = "block";
}

function hideModal() {
    document.getElementById("myModal").style.display = "none";
}

// Event listeners
document.getElementById("closeModal").addEventListener("click", hideModal);

// Close modal if clicking outside of it
window.addEventListener("click", function (event) {
    if (event.target === document.getElementById("myModal")) {
        hideModal();
    }
});

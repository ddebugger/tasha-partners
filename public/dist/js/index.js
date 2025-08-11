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

// ================file/logo upload=========================
const fileInput = document.getElementById("fileInput");
const uploadCircle = document.getElementById("uploadCircle");

fileInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
        const imgURL = URL.createObjectURL(file);
        uploadCircle.style.backgroundImage = `url('${imgURL}')`;
    }
});

// const fileInput = document.getElementById("fileInput");
// const uploadCircle = document.querySelector(".upload-circle");

// fileInput.addEventListener("change", function (event) {
//     const file = event.target.files[0];
//     if (file) {
//         const img = document.createElement("img");
//         img.src = URL.createObjectURL(file);
//         uploadCircle.innerHTML = "";
//         uploadCircle.appendChild(img);
//     }
// });

// =======================Display file name===================
function showFileName(input) {
    document.getElementById("fileName").textContent =
        input.files.length > 0 ? input.files[0].name : "No file selected";
}

// ==========delete customer block==============
function deleteBlock(btn) {
    btn.parentElement.remove();
}

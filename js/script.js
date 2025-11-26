// === Map script ===
document.addEventListener("DOMContentLoaded", () => {
    // region markers - triangles
    const markers = document.querySelectorAll(".region-marker");

    // popup box info elements
    const infoBox = document.getElementById("region-info");
    const nameEl = document.getElementById("region-name");
    const descEl = document.getElementById("region-desc");
    const closeBtn = document.getElementById("close-info");

    // marker click events and responses
    markers.forEach(marker => {
        marker.addEventListener("click", () => {
            nameEl.textContent = marker.dataset.name;
            descEl.textContent = marker.dataset.description;
            infoBox.classList.remove("hidden");
        });
    });

    // close info box
    closeBtn.addEventListener("click", () => {
        infoBox.classList.add("hidden");
        });
    });
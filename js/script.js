// === Map script ===
document.addEventListener("DOMContentLoaded", () => {
    // region markers - triangles
    const markers = document.querySelectorAll(".region-marker");

    // popup box info elements
    const infoBox = document.getElementById("region-info");
    const nameEl = document.getElementById("region-name");
    const descEl = document.getElementById("region-desc");

    // popup buttons
    const closeBtn = document.getElementById("close-info");
    const viewBtn = document.getElementById("view-characters");

    // marker click events and responses
    // loop through every marker
    markers.forEach(marker => {
        marker.addEventListener("click", () => {
            nameEl.textContent = marker.dataset.name;
            descEl.textContent = marker.dataset.description;

            // update link to character page
            const regionName = marker.dataset.short;
            viewBtn.href = `character.php?name=${encodeURIComponent(regionName)}`;

            // show popup
            infoBox.classList.remove("hidden");
        });
    });

    // close info box
    closeBtn.addEventListener("click", () => {
        infoBox.classList.add("hidden");
        });
    });

const targetUrls = window.location.pathname.split("/")[1];

// เเผนก
if (targetUrls === "department-index" || targetUrls === "department-edit") {
    setActiveClass("department", "department-index");
}
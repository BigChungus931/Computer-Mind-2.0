const savedTheme = localStorage.getItem("theme") || "light";
document.documentElement.setAttribute("data-theme", savedTheme);
document.addEventListener("DOMContentLoaded", () => {
  const html = document.documentElement;
  const img = document.getElementById("theme-image");
  const base = "/Computer%20Mind/Computer-Mind-2.0/main/";
  if (html.getAttribute("data-theme") === "dark") {
    img.src = base + "img/Computer-logo-dark.PNG";
} else {
img.src = base + "img/Computer-logo.PNG";
}
});

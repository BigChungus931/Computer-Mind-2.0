function hamburgerf() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("active");
  const toggler = document.querySelector('.hamburger');
  if (toggler) {
    const expanded = toggler.getAttribute('aria-expanded') === 'true';
    toggler.setAttribute('aria-expanded', (!expanded).toString());
  }
}

function syncNavHeightVar() {
  const nav = document.querySelector('.navbar');
  if (!nav) return;
  const h = nav.offsetHeight; // includes padding
  document.documentElement.style.setProperty('--nav-height', h + 'px');
}

document.addEventListener('DOMContentLoaded', () => {
  syncNavHeightVar();
});

window.addEventListener('load', syncNavHeightVar);
window.addEventListener('resize', syncNavHeightVar);
const headers = document.querySelectorAll(".acc-header");
headers.forEach((header) => {
  header.addEventListener("click", () => {
    const content = header.nextElementSibling;

    document.querySelectorAll(".acc-content").forEach((c) => {
      if (c !== content) {
        c.style.maxHeight = null;
      }
    });

    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
});

function changeTheme() {
  const html = document.documentElement; //<html lang="en" data-theme="dark">
  const currentTheme = html.getAttribute("data-theme"); //data-theme="dark"
  const img = document.getElementById("theme-image");
  const base = "/Computer%20Mind/Computer-Mind-2.0/main/";
  let newTheme;
  switch (currentTheme) {
    case "light":
      newTheme = "dark";
      if (newTheme === "dark") {
        img.src = base + "img/Computer-logo-dark.PNG";
      }
      break;

    case "dark":
      newTheme = "light";
      if (newTheme === "light") {
        img.src = base + "img/Computer-logo.png";
      }
      break;

    default:
      newTheme = "light";
  }
  html.setAttribute("data-theme", newTheme);
  localStorage.setItem("theme", newTheme);
}

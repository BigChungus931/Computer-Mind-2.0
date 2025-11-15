<?php
echo '
<script
const savedTheme = localStorage.getItem("theme") || "light";
document.documentElement.setAttribute("data-theme", savedTheme);
document.addEventListener("DOMContentLoaded", () => {
  const html = document.documentElement;
  const img = document.getElementById("theme-image");
  if (html.getAttribute("data-theme") === "dark") {
    img.src = "' . $dots . 'img/Computer-logo-dark.PNG";
} else {
img.src = "' . $dots . 'img/Computer-logo.PNG";
}
});
</script>
';

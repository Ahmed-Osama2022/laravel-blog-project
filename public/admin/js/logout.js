const logout_btn = document.getElementById("logout_btn");

function logout() {
  fetch("http://localhost:8000/logout", {
    method: "POST",
    headers: {
      "X-CSRF-TOKEN": document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    },
  });

  window.location.href = "/home";
}

logout_btn.addEventListener("click", (e) => {
  e.preventDefault();
  console.log("CLICKED!");

  logout();
});

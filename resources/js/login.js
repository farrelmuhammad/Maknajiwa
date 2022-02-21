function togglePassword() {
    var x = document.getElementById("password-content-3-5");
    if (x.type === "password") {
      x.type = "text";
      document
        .getElementById("icon-toggle")
        .setAttribute("fill", "#2ec49c");
    } else {
      x.type = "password";
      document
        .getElementById("icon-toggle")
        .setAttribute("fill", "#CACBCE");
    }
  }
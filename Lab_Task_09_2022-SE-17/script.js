const form = document.getElementById("userForm");
const inputs = form.querySelectorAll("input");
const successMsg = document.getElementById("successMsg");
function validateField(id, condition, message) {
  const input = document.getElementById(id);
  const errorDiv = document.getElementById(id + "Err");

  if (!condition) {
    input.classList.add("error");
    errorDiv.textContent = message;
    return false;
  } else {
    input.classList.remove("error");
    errorDiv.textContent = "";
    return true;
  }
}
inputs.forEach((input) => {
  input.addEventListener("input", () => {
    successMsg.textContent = "";
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const fname = document.getElementById("fname").value.trim();
  const lname = document.getElementById("lname").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const pass = document.getElementById("pass").value.trim();
  const confirm = document.getElementById("confirm").value.trim();

  let valid = true;

  // Validate first name
  valid &= validateField("fname", fname.length >= 3 && fname.length <= 12, "3–12 characters required");

  // Validate last name
  valid &= validateField("lname", lname.length >= 3 && lname.length <= 12, "3–12 characters required");

  // Validate email
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  valid &= validateField("email", emailPattern.test(email), "Invalid email format");

  // Validate phone number (Pakistani)
  const phonePattern = /^03\d{9}$/;
  valid &= validateField("phone", phonePattern.test(phone), "Enter valid Pakistani number");

  // Validate password
  const passPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/;
  valid &= validateField("pass", passPattern.test(pass), "At least 8 chars, 1 capital, 1 number, 1 symbol");

  // Confirm password
  valid &= validateField("confirm", pass === confirm && confirm !== "", "Passwords must match");

  if (valid) {
    successMsg.textContent = "✅ Registration successful!";
    form.reset();
  }
});

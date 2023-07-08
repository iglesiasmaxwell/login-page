function showPass(){
  const pw = document.getElementById("pwInput");
  const eyecon = document.getElementById("eyeCon");
  eyecon.classList.toggle("fa-eye-slash");
  // if (pw.type === "password") {
  //   pw.type = "text";
  // } else {
  //   pw.type = "password";
  // }
  const type = pw.type === 'password' ? 'text' : 'password';
  pw.type = type;
}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | Soni</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
transition:.3s;
}

body{
background:#0f172a;
color:white;
}

body.light-mode{
background:#f8fafc;
color:#0f172a;
}

/* HEADER */

header{
position:fixed;
top:0;
left:0;
width:100%;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(0,0,0,.8);
backdrop-filter:blur(10px);
z-index:1000;
}

body.light-mode header{
background:rgba(255,255,255,.9);
}

.logo{
font-size:28px;
font-weight:bold;
color:#38bdf8;
}

nav{
display:flex;
align-items:center;
}

nav a{
text-decoration:none;
color:white;
margin-left:25px;
font-weight:500;
}

body.light-mode nav a{
color:#0f172a;
}

nav a:hover{
color:#38bdf8;
}

#themeToggle{
background:none;
border:none;
font-size:24px;
cursor:pointer;
color:white;
margin-left:25px;
}

/* CONTACT */

.contact-section{
padding:140px 8% 80px;
min-height:100vh;
}

.title{
text-align:center;
font-size:48px;
margin-bottom:10px;
}

.title span{
color:#38bdf8;
}

.subtitle{
text-align:center;
color:#cbd5e1;
margin-bottom:50px;
}

body.light-mode .subtitle{
color:#475569;
}

.contact-container{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
}

.contact-info{
background:#1e293b;
padding:30px;
border-radius:20px;
}

body.light-mode .contact-info{
background:white;
box-shadow:0 0 15px rgba(0,0,0,.1);
}

.contact-info h2{
margin-bottom:20px;
color:#38bdf8;
}

.contact-info p{
margin:18px 0;
line-height:1.8;
}

.contact-form{
background:#1e293b;
padding:30px;
border-radius:20px;
}

body.light-mode .contact-form{
background:white;
box-shadow:0 0 15px rgba(0,0,0,.1);
}

.contact-form input,
.contact-form textarea{
width:100%;
padding:15px;
margin:12px 0;
border:none;
outline:none;
border-radius:10px;
background:#334155;
color:white;
}

body.light-mode .contact-form input,
body.light-mode .contact-form textarea{
background:#f1f5f9;
color:black;
}

.contact-form button{
width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#38bdf8;
font-size:17px;
font-weight:600;
cursor:pointer;
}

.contact-form button:hover{
transform:translateY(-5px);
}

/* FOOTER */

footer{
background:black;
padding:25px;
text-align:center;
}

body.light-mode footer{
background:#e2e8f0;
color:black;
}

/* MOBILE */

@media(max-width:850px){

.contact-container{
grid-template-columns:1fr;
}

nav a{
display:none;
}

.title{
font-size:38px;
}

}





/* MOBILE MENU ICON */
#menuToggle{
display:none;
background:none;
border:none;
color:white;
font-size:28px;
cursor:pointer;
margin-left:15px;
}

/* LIGHT MODE MENU ICON */
.light-mode #menuToggle{
color:#0f172a;
}

/* MOBILE NAVBAR */
@media(max-width:768px){

header{
padding:15px 5%;
}

/* Menu icon show */
#menuToggle{
display:block;
}

/* Theme button */
#themeToggle{
margin-left:15px;
}

/* Mobile menu */
nav{
position:relative;
}

/* Hide links initially */
nav a{
display:none;
}

/* Open menu */
nav.active{
position:absolute;
top:70px;
left:0;
width:100%;
background:rgba(15,23,42,0.98);
padding:20px;
display:flex;
flex-direction:column;
align-items:center;
gap:18px;
box-shadow:0 10px 20px rgba(0,0,0,0.3);
}

/* Show links when menu opens */
nav.active a{
display:block;
margin:0;
font-size:17px;
color:white;
}

/* Light mode menu */
.light-mode nav.active{
background:rgba(255,255,255,0.98);
}

.light-mode nav.active a{
color:#0f172a;
}

/* Keep buttons in menu */
nav.active #themeToggle,
nav.active #menuToggle{
margin:5px 0;
}

}

</style>
</head>

<body>

<header>

<div class="logo">Soni.</div>

<nav>

<a href="index.php">Home</a>
<a href="about.php">About</a>
<a href="skill.php">Skills</a>
<a href="project.php">Projects</a>
<a href="contact.php">Contact</a>

<button id="themeToggle">☀︎</button>

<button id="menuToggle" aria-label="Open Menu">☰</button>

</nav>

</header>

<section class="contact-section">

<h1 class="title">Contact <span>Me</span></h1>

<p class="subtitle">
Feel free to contact me for any project or job opportunity.
</p>

<div class="contact-container">

<div class="contact-info">

<h2>Get In Touch</h2>

<p><strong>Name:</strong> Soni</p>

<p><strong>Email:</strong><br>
officialsoni8826@gmail.com</p>

<p><strong>Location:</strong><br>
Mangolpuri, Delhi, India</p>

<p><strong>Role:</strong><br>
Full Stack Developer</p>

<p>
I'm always interested in new opportunities, freelance work and exciting web development projects.
</p>

</div>

<div class="contact-form">

<form>

<input type="text" id="name" placeholder="Your Name" required>

<input type="tel" id="phone" placeholder="Contact Number" required>

<input type="email" id="email" placeholder="Your Email" required>

<textarea id="mess" placeholder="Your Message"></textarea>

        <button onclick="sendWhatsApp()" class="order-btn">
            Send 📱
        </button>

</form>

</div>

</div>

</section>

<footer>

© 2026 Soni | Full Stack Developer

</footer>

<script>

const btn=document.getElementById("themeToggle");

btn.onclick=()=>{

document.body.classList.toggle("light-mode");

if(document.body.classList.contains("light-mode")){

btn.innerHTML="⏾";
btn.style.color="black";
localStorage.setItem("theme","light");

}else{

btn.innerHTML="☀︎";
btn.style.color="white";
localStorage.setItem("theme","dark");

}

}

if(localStorage.getItem("theme")=="light"){

document.body.classList.add("light-mode");
btn.innerHTML="⏾";
btn.style.color="black";

}






function sendWhatsApp(){
let name=document.getElementById("name").value.trim();
let phone=document.getElementById("phone").value.trim();
let email=document.getElementById("email").value.trim();
let mess=document.getElementById("mess").value.trim();
if(!name||!phone||!email||!mess){alert("Please fill all required details.");return;}
if(!reName(name)){alert("Please enter a valid name.");return;}
if(!/^[6-9]\d{9}$/.test(phone)){alert("Please enter a valid 10-digit mobile number.");return;}
let ownerNumber="918826423869";
let text=`🌿 job opportunity 🌿

your Name: ${name}
Contact number: ${phone}
your email: ${email}
your Message: ${mess}`;
alert("contact verified! Redirecting to WhatsApp.");
window.open(`https://wa.me/${ownerNumber}?text=${encodeURIComponent(text)}`,"_blank");
}
function reName(n){return /^[A-Za-z ]{3,}$/.test(n);}








const menuToggle = document.getElementById("menuToggle");
const navbar = document.querySelector("nav");

menuToggle.addEventListener("click", () => {

navbar.classList.toggle("active");

if(navbar.classList.contains("active")){
menuToggle.innerHTML = "✕";
}else{
menuToggle.innerHTML = "☰";
}

});


</script>

</body>
</html>
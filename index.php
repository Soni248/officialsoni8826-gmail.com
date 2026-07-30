<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Soni | Full Stack Developer</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
transition:0.3s;
}

body{
background:#0f172a;
color:white;
}

/* LIGHT MODE */
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
background:rgba(0,0,0,0.8);
backdrop-filter:blur(10px);
z-index:1000;
}

.light-mode header{
background:rgba(255,255,255,0.9);
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

.light-mode nav a{
color:#0f172a;
}

nav a:hover{
color:#38bdf8;
}

#themeToggle{
background:none;
border:none;
font-size:24px;
color: white;
cursor:pointer;
margin-left:25px;
}

/* HERO */
.hero{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
padding:20px;
background:linear-gradient(to right,#0f172a,#1e293b);
}

.light-mode .hero{
background:linear-gradient(to right,#f8fafc,#e2e8f0);
}

.hero-content h1{
font-size:65px;
margin-bottom:10px;
}

.hero-content span{
color:#38bdf8;
}

.hero-content p{
font-size:20px;
color:#cbd5e1;
}

.light-mode .hero-content p{
color:#334155;
}

.btn{
display:inline-block;
margin-top:25px;
padding:12px 30px;
background:#38bdf8;
color:black;
text-decoration:none;
font-weight:600;
border-radius:30px;
}

.btn:hover{
transform:translateY(-5px);
}

/* SECTIONS */
section{
padding:100px 8%;
}

.section-title{
font-size:40px;
text-align:center;
margin-bottom:50px;
color:#38bdf8;
}

/* ABOUT */
.about{
display:grid;
grid-template-columns:1fr 2fr;
gap:40px;
align-items:center;
}

.about img{
width:100%;
border-radius:20px;
}

.about-text p{
line-height:1.8;
color:#cbd5e1;
}

.light-mode .about-text p{
color:#334155;
}

/* SKILLS */
.skills{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}

.skill-box{
background:#1e293b;
padding:25px;
border-radius:15px;
text-align:center;
font-weight:600;
}

.skill-box:hover{
background:#38bdf8;
color:black;
transform:translateY(-8px);
}

.light-mode .skill-box{
background:white;
color:#0f172a;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

/* PROJECTS */
.projects{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}

.project-card{
background:#1e293b;
border-radius:20px;
overflow:hidden;
}

.project-card:hover{
transform:translateY(-10px);
}

.light-mode .project-card{
background:white;
color:#0f172a;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.project-card img{
width:100%;
height:220px;
object-fit:cover;
}

.project-content{
padding:20px;
}

.project-content p{
color:#cbd5e1;
margin:15px 0;
}

.light-mode .project-content p{
color:#475569;
}

/* CONTACT */
.contact{
text-align:center;
}

.contact form{
max-width:600px;
margin:auto;
}

.contact input,
.contact textarea{
width:100%;
padding:15px;
margin:10px 0;
border:none;
outline:none;
border-radius:10px;
background:#1e293b;
color:white;
}

.light-mode .contact input,
.light-mode .contact textarea{
background:white;
color:black;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.contact button{
padding:15px 35px;
background:#38bdf8;
border:none;
border-radius:30px;
cursor:pointer;
font-weight:bold;
}

/* FOOTER */
footer{
text-align:center;
padding:25px;
background:black;
}

.light-mode footer{
background:#e2e8f0;
color:#0f172a;
}

/* RESPONSIVE */
@media(max-width:768px){

.hero-content h1{
font-size:40px;
}

.about{
grid-template-columns:1fr;
}

nav a{
display:none;
}

#themeToggle{
display:block;
}
}
#changingText{
    color:#38bdf8;
    border-right:3px solid #38bdf8;
    padding-right:5px;
    animation:blinkCursor 0.7s infinite;
}

@keyframes blinkCursor{
    50%{
        border-color:transparent;
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

<section class="hero" id="home">
<div class="hero-content">

<h1>Hey, I'm <span id="changingText">Soni</span></h1>

<p>Full Stack Developer | Web Developer | PHP & MySQL Developer</p>

<a href="project.php" class="btn">View Projects</a>

</div>
</section>

<section id="about">

<h2 class="section-title">About Me</h2>

<div class="about">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1000" alt="Developer">

<div class="about-text">

<p>
Motivated and detail-oriented Full Stack Developer with a strong foundation in HTML, CSS, JavaScript, PHP and MySQL.

I enjoy building responsive, user-friendly and dynamic web applications. I have developed projects such as a Student Management System, Login & Registration System with OTP Authentication, and a responsive Portfolio Website.

I am a quick learner with strong problem-solving skills and always eager to improve my technical knowledge while contributing to real-world projects.
</p>

</div>
</div>

</section>

<section id="skills">

<h2 class="section-title">Skills</h2>

<div class="skills">

<div class="skill-box">HTML5</div>
<div class="skill-box">CSS3</div>
<div class="skill-box">JavaScript</div>
<div class="skill-box">PHP</div>
<div class="skill-box">MySQL (Basic)</div>
<div class="skill-box">Responsive Design</div>
<div class="skill-box">Microsoft Office</div>
<div class="skill-box">Spreadsheets</div>

</div>

</section>

<section id="projects">

<h2 class="section-title">Projects</h2>

<div class="projects">

<div class="project-card">
<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=1000">

<div class="project-content">
<h3>Student Management System</h3>

<p>
Developed using PHP and MySQL with CRUD operations for efficient student record management.
</p>
<a href="#" class="btn">Live Demo</a>
</div>
</div>

<div class="project-card">
<img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1000">

<div class="project-content">
<h3>Login & Registration System</h3>

<p>
Secure authentication system with Login, Registration and OTP-based Password Reset functionality.
</p>
<a href="#" class="btn">Live Demo</a>
</div>
</div>

<div class="project-card">
<img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=1000">

<div class="project-content">
<h3>Portfolio Website</h3>

<p>
Responsive personal portfolio built using HTML, CSS and JavaScript with modern UI design.
</p>
<a href="#" class="btn">Live Demo</a>
</div>
</div>

</div>

</section>

<section id="contact">

<h2 class="section-title">Contact Me</h2>

<div class="contact">

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

</section>

<footer>
<p>© 2026 Soni | Full Stack Developer</p>
</footer>

<script>
const themeBtn = document.getElementById("themeToggle");

themeBtn.addEventListener("click", () => {

document.body.classList.toggle("light-mode");

if(document.body.classList.contains("light-mode")){
themeBtn.innerHTML = "⏾";
 themeBtn.style.color = "black";
localStorage.setItem("theme","light");
}else{
themeBtn.innerHTML = "☀︎";
themeBtn.style.color = "white";
localStorage.setItem("theme","dark");
}

});

if(localStorage.getItem("theme")==="light"){
document.body.classList.add("light-mode");
themeBtn.innerHTML="⏾";
 themeBtn.style.color = "black";
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











const changingText = document.getElementById("changingText");

const words = ["Soni", "Web Developer"];

let wordIndex = 0;
let charIndex = words[0].length;
let deleting = true;

function typingAnimation() {

    const currentWord = words[wordIndex];

    if (deleting) {

        changingText.textContent =
            currentWord.substring(0, charIndex - 1);

        charIndex--;

        if (charIndex === 0) {

            deleting = false;

            wordIndex++;

            if (wordIndex >= words.length) {
                wordIndex = 0;
            }

            setTimeout(typingAnimation, 500);
            return;
        }

    } else {

        changingText.textContent =
            currentWord.substring(0, charIndex + 1);

        charIndex++;

        if (charIndex === currentWord.length) {

            deleting = true;

            setTimeout(typingAnimation, 1500);
            return;
        }
    }

    setTimeout(
        typingAnimation,
        deleting ? 100 : 150
    );
}

setTimeout(typingAnimation, 1500);











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
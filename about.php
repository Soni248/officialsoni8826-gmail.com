<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | Soni</title>

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
color:#fff;
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

/* ABOUT */

.about{
min-height:100vh;
padding:140px 8% 80px;
display:grid;
grid-template-columns:1fr 1.3fr;
gap:50px;
align-items:center;
}

.about img{
width:100%;
border-radius:20px;
box-shadow:0 15px 40px rgba(0,0,0,.4);
}

.about-text h1{
font-size:50px;
margin-bottom:20px;
}

.about-text span{
color:#38bdf8;
}

.about-text p{
line-height:1.9;
font-size:17px;
color:#cbd5e1;
margin-bottom:20px;
}

body.light-mode .about-text p{
color:#475569;
}

/* INFO */

.info{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:15px;
margin-top:25px;
}

.info div{
background:#1e293b;
padding:15px;
border-radius:10px;
}

body.light-mode .info div{
background:white;
box-shadow:0 0 10px rgba(0,0,0,.1);
}

.info strong{
color:#38bdf8;
}

/* BUTTON */

.btn{
display:inline-block;
margin-top:30px;
padding:14px 35px;
background:#38bdf8;
color:black;
text-decoration:none;
font-weight:600;
border-radius:30px;
}

.btn:hover{
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

@media(max-width:900px){

.about{
grid-template-columns:1fr;
text-align:center;
}

.about-text h1{
font-size:38px;
}

.info{
grid-template-columns:1fr;
}

nav a{
display:none;
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

<section class="about">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1000" alt="Developer">

<div class="about-text">

<h1>About <span>Me</span></h1>

<p>

Hello! I'm <strong>Soni</strong>, a passionate Full Stack Developer from Delhi.

I have a strong foundation in HTML, CSS, JavaScript, PHP and MySQL. I enjoy creating responsive, user-friendly and modern websites that solve real-world problems.

I have developed projects like Student Management System, Login & Registration System with OTP Authentication, and a Personal Portfolio Website.

As a fresher, I am always eager to learn new technologies, improve my coding skills, and contribute to innovative projects while growing professionally.

</p>

<div class="info">

<div>
<strong>Name:</strong><br>
Soni
</div>

<div>
<strong>Role:</strong><br>
Full Stack Developer
</div>

<div>
<strong>Email:</strong><br>
officialsoni8826@gmail.com
</div>

<div>
<strong>Location:</strong><br>
Delhi, India
</div>

<div>
<strong>Education:</strong><br>
Senior Secondary Education | CBSE, Delhi
</div>

<div>
<strong>Experience:</strong><br>
Fresher
</div>

</div>

<a href="contact.php" class="btn">Contact Me</a>

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
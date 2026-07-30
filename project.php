```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projects | Soni</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
transition:.3s;
scroll-behavior:smooth;
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
margin-left:20px;
}

/* PROJECT SECTION */

.projects{
padding:140px 8% 80px;
min-height:100vh;
}

.projects h1{
text-align:center;
font-size:45px;
margin-bottom:10px;
}

.projects h1 span{
color:#38bdf8;
}

.projects p{
text-align:center;
color:#cbd5e1;
margin-bottom:50px;
}

body.light-mode .projects p{
color:#475569;
}

.project-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}

.card{
background:#1e293b;
border-radius:18px;
overflow:hidden;
box-shadow:0 0 15px rgba(0,0,0,.3);
}

body.light-mode .card{
background:white;
box-shadow:0 0 15px rgba(0,0,0,.1);
}

.card:hover{
transform:translateY(-10px);
}

.card img{
width:100%;
height:220px;
object-fit:cover;
}

.content{
padding:20px;
}

.content h2{
margin-bottom:10px;
}

.content p{
text-align:left;
font-size:15px;
line-height:1.7;
margin-bottom:20px;
}

.btns{
display:flex;
gap:10px;
}

.btn{
flex:1;
text-align:center;
padding:12px;
background:#38bdf8;
color:black;
text-decoration:none;
font-weight:600;
border-radius:8px;
}

.btn:hover{
opacity:.9;
}

/* FOOTER */

footer{
background:black;
padding:20px;
text-align:center;
}

body.light-mode footer{
background:#e2e8f0;
color:black;
}

/* MOBILE */

@media(max-width:768px){

nav a{
display:none;
}

.projects h1{
font-size:35px;
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

<section class="projects">

<h1>My <span>Projects</span></h1>

<p>Here are some of my web development projects.</p>

<div class="project-grid">

<div class="card">

<img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800" alt="">

<div class="content">

<h2>Student Management System</h2>

<p>
Developed using PHP and MySQL with CRUD functionality for managing student records efficiently.
</p>

<div class="btns">

<a href="#" class="btn">Live Demo</a>

</div>

</div>

</div>

<div class="card">

<img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?w=800" alt="">

<div class="content">

<h2>Login & Registration</h2>

<p>
Secure Login & Registration System with OTP based password reset using PHP and MySQL.
</p>

<div class="btns">

<a href="#" class="btn">Live Demo</a>

</div>

</div>

</div>

<div class="card">

<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800" alt="">

<div class="content">

<h2>Portfolio Website</h2>

<p>
Responsive personal portfolio website created using HTML, CSS and JavaScript.
</p>

<div class="btns">

<a href="#" class="btn">Live Demo</a>

</div>

</div>

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
```
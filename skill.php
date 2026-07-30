```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Skills | Soni</title>

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

/* SKILLS */

.skills-section{
padding:140px 8% 80px;
min-height:100vh;
}

.title{
text-align:center;
font-size:48px;
margin-bottom:15px;
}

.title span{
color:#38bdf8;
}

.subtitle{
text-align:center;
color:#cbd5e1;
margin-bottom:60px;
font-size:18px;
}

body.light-mode .subtitle{
color:#475569;
}

.skills-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

.skill-card{
background:#1e293b;
padding:30px;
border-radius:20px;
text-align:center;
}

body.light-mode .skill-card{
background:white;
box-shadow:0 0 15px rgba(0,0,0,.1);
}

.skill-card:hover{
transform:translateY(-10px);
background:#38bdf8;
color:black;
}

.skill-card h2{
font-size:28px;
margin-bottom:15px;
}

.skill-card p{
font-size:15px;
line-height:1.8;
}

/* PROGRESS */

.progress{
margin-top:20px;
}

.progress-title{
display:flex;
justify-content:space-between;
margin-bottom:8px;
font-weight:600;
}

.bar{
width:100%;
height:10px;
background:#334155;
border-radius:20px;
overflow:hidden;
}

.fill{
height:100%;
background:#38bdf8;
border-radius:20px;
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

@media(max-width:768px){

nav a{
display:none;
}

.title{
font-size:36px;
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

<section class="skills-section">

<h1 class="title">My <span>Skills</span></h1>

<p class="subtitle">
Technologies and tools I use to build responsive and dynamic websites.
</p>

<div class="skills-grid">

<div class="skill-card">

<h2>HTML5</h2>

<p>Create modern and semantic website structures.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>95%</span>
</div>
<div class="bar">
<div class="fill" style="width:95%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>CSS3</h2>

<p>Responsive layouts, animations and modern UI design.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>90%</span>
</div>
<div class="bar">
<div class="fill" style="width:90%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>JavaScript</h2>

<p>Interactive web pages with DOM and ES6 features.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>85%</span>
</div>
<div class="bar">
<div class="fill" style="width:85%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>PHP</h2>

<p>Backend development, authentication and CRUD systems.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>80%</span>
</div>
<div class="bar">
<div class="fill" style="width:80%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>MySQL</h2>

<p>Basic database management and SQL queries.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>75%</span>
</div>
<div class="bar">
<div class="fill" style="width:75%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>Responsive Design</h2>

<p>Mobile-friendly websites using Flexbox and Grid.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>90%</span>
</div>
<div class="bar">
<div class="fill" style="width:90%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>Microsoft Office</h2>

<p>Word, Excel, PowerPoint and documentation work.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>85%</span>
</div>
<div class="bar">
<div class="fill" style="width:85%;"></div>
</div>
</div>

</div>

<div class="skill-card">

<h2>Spreadsheets</h2>

<p>Data organization, formulas and basic reporting.</p>

<div class="progress">
<div class="progress-title">
<span>Skill Level</span>
<span>80%</span>
</div>
<div class="bar">
<div class="fill" style="width:80%;"></div>
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
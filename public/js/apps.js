const dark = document.querySelector(".dark");
const night = document.querySelector(".night");
const light = document.querySelector(".light");
const sidebar = document.querySelector(".sidebar");

dark.addEventListener("click",()=>{
	sidebar.className ="sidebar";
})

night.addEventListener("click",()=>{
	sidebar.className ="sidebar night";
})

light.addEventListener("click",()=>{
	sidebar.className ="sidebar light";
})
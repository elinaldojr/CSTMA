

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
  /*Active link*/
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
  
  /*Remove menu mobile*/
  const navMenu = document.getElementById('nav-menu')
  navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.subscribe-image-container',{}); 
sr.reveal('.big-text',{delay: 800}); 
sr.reveal('.small-text',{delay: 500}); 
sr.reveal('.subscribe-button',{delay: 200}); 

/*SCROLL ABOUT*/
sr.reveal('.image-1',{delay: 400}); 
sr.reveal('.image-2',{delay: 500}); 
sr.reveal('.image-3',{delay: 600}); 

/*SCROLL SKILLS*/
sr.reveal('.text-seguranca',{}); 
sr.reveal('.clientes',{}); 
sr.reveal('.partner-logo',{interval: 200}); 

/*SCROLL CONTACT*/
sr.reveal('.gg-index',{}); 





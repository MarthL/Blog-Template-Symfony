/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import { gsap } from 'gsap/dist/gsap'

// any CSS you import will output into a single css file (app.css in this case)
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle';
import '../../node_modules/bootstrap/dist/css/bootstrap.min.css';
import './styles/app.scss';
import './styles/parts/footer.scss';
import './styles/parts/header.scss';
import './styles/parts/form.scss';
import './styles/home.scss';



gsap.from("#text__hero", {
    opacity: 0,
    y: -50,
    duration: 1
});

let navbar = document.getElementsByClassName('navbar');



// tout marche, le problème c'est bootstrap, il faut override le css
window.addEventListener("scroll", function () { 
    if(window.scrollY > 0 ) {
        navbar[0].classList.remove('bg-light');
    } else { 
        navbar[0].classList.add('bg-light');
    }
})

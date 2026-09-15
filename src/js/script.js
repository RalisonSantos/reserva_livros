import Navbar from "./modules/navbar.js";
import {SlideNav} from "./modules/slide.js";

const navbar = new Navbar();
navbar.init();

const slide = new SlideNav(".wrapper", ".slide");
slide.init();
slide.changeSlide(2);
slide.addArrow(".prev", ".next");

const slideReview = new SlideNav("#wrapper-review","#slide-review");
slideReview.init();
slideReview.changeSlide(1);
slideReview.addArrow("#prev-review","#next-review");

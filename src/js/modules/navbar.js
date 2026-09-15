export default class Navbar {
  constructor(button, menu) {
    this.button = document.querySelector(".btn");
    this.menu = document.querySelector(".menu");

    this.onMenu = this.onMenu.bind(this);
  }

  onMenu() {
    this.menu.classList.toggle("active");
    this.button.classList.toggle("active");
  }

  addEventClick(event) {
    this.button.addEventListener("click", this.onMenu);
  }

  init() {
    this.addEventClick();
    return this;
  }
}

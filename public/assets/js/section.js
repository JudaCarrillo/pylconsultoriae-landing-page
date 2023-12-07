// Cambiar imagen de la barra de navegación en el scroll
const imgLogo = document.getElementById("imgLogo");
const rutaLogo = imgLogo.getAttribute("src");

// Obtener el elemento del encabezado
let header = document.querySelector("header");

// Almacenar la clase original del encabezado
const classHeader = header.getAttribute("class");

// Función para manejar el cambio de imagen en el encabezado
function updateLogo() {
  // Verificar si la clase "sticky" está presente en el encabezado
  const isSticky = header.classList.contains("sticky");

  // Cambiar la imagen del logo en consecuencia
  if (isSticky) {
    imgLogo.setAttribute("src", "../assets/img/logo-wb.svg"); // Reemplaza con la ruta correcta para el modo sticky
  } else {
    imgLogo.setAttribute("src", rutaLogo); // Restaurar la ruta original cuando no está en modo sticky
  }
}

let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
};

// scroll sections
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 100;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      // active navbar links
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
  // sticky header
  let header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 100);

  menuIcon.classList.remove("bx-x");
  navbar.classList.remove("active");

  updateLogo();
};

let valueDisplays = document.querySelectorAll(".num");
let interval = 2000;

// Configurar opciones para Intersection Observer
let options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5, // El valor 0.5 significa que al menos el 50% del elemento debe estar visible
};

// Función de callback para Intersection Observer
let handleIntersection = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Iniciar la animación solo cuando el elemento es visible
      startAnimation(entry.target);
      observer.unobserve(entry.target); // Dejar de observar después de iniciar la animación
    }
  });
};

// Crear una instancia de Intersection Observer con la función de callback y opciones
let observer = new IntersectionObserver(handleIntersection, options);

// Observar cada elemento con la clase "num"
valueDisplays.forEach((valueDisplay) => {
  observer.observe(valueDisplay);
});

// Función para iniciar la animación
function startAnimation(valueDisplay) {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));

  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue++;
    valueDisplay.textContent = (endValue < 10 ? "0" : "+") + startValue;

    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
}

updateLogo();

import './bootstrap';
import '../css/app.css';

let lastScrollTop = 0;
const header = document.getElementById("main-header");

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        header.style.transform = "translateY(-100%)";
    } else {
        header.style.transform = "translateY(0)";
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});

//JS para animacion de entrada (segunda vista)
document.addEventListener("DOMContentLoaded", function () {
    const options = {
      threshold: 0.3
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (entry.target.classList.contains('reveal-left')) {
            entry.target.classList.add('animate-slide-in-left');
          }
          if (entry.target.classList.contains('reveal-right')) {
            entry.target.classList.add('animate-slide-in-right');
          }
        }
      });
    }, options);

    document.querySelectorAll('.reveal-left, .reveal-right').forEach(el => {
      observer.observe(el);
    });
  });

  // JS para animacion de entrada (testimonios)
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-10');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.3
  });

  observer.observe(document.querySelector('#testimonios-content'));

// JS para animacion de entrada (segmentos)
  const observerSegmentos = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-10');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        observerSegmentos.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  observerSegmentos.observe(document.querySelector('#segmentos-content'));

  
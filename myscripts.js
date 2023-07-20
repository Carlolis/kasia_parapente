window.onload = function () {
  alert("Bienvenue sur notre site !");
  console.log("Le site s'est chargé complètement.");
};
function Cursor() {
  const cursorDotOutline = React.useRef();
  const cursorDot = React.useRef();
  const requestRef = React.useRef();
  const previousTimeRef = React.useRef();
  let [mousePosition, setMousePosition] = React.useState({ x: 0, y: 0 });
  const [width, setWidth] = React.useState(window.innerWidth);
  const [height, setHeight] = React.useState(window.innerHeight);
  let cursorVisible = React.useState(false);
  let cursorEnlarged = React.useState(false);

  /**
   * Mouse Moves
   */
  const onMouseMove = (event) => {
    const { pageX: x, pageY: y } = event;
    setMousePosition({ x, y });
    positionDot(event);
  };
  const onMouseEnter = () => {
    cursorVisible.current = true;
    toggleCursorVisibility();
  };
  const onMouseLeave = () => {
    cursorVisible.current = false;
    toggleCursorVisibility();
  };
  const onMouseDown = () => {
    cursorEnlarged.current = true;
    toggleCursorSize();
  };
  const onMouseUp = () => {
    cursorEnlarged.current = false;
    toggleCursorSize();
  };
  const onResize = (event) => {
    setWidth(window.innerWidth);
    setHeight(window.innerHeight);
  };

  /**
   * Hooks
   */
  React.useEffect(() => {
    document.addEventListener("mousemove", onMouseMove);
    document.addEventListener("mouseenter", onMouseEnter);
    document.addEventListener("mouseleave", onMouseLeave);
    document.addEventListener("mousedown", onMouseDown);
    document.addEventListener("mouseup", onMouseUp);
    window.addEventListener("resize", onResize);
    requestRef.current = requestAnimationFrame(animateDotOutline);

    // Handle Link Hovers
    handleLinkHovers();

    return () => {
      document.removeEventListener("mousemove", onMouseMove);
      document.removeEventListener("mouseenter", onMouseEnter);
      document.removeEventListener("mouseleave", onMouseLeave);
      document.removeEventListener("mousedown", onMouseDown);
      document.removeEventListener("mouseup", onMouseUp);
      window.removeEventListener("resize", onResize);
      cancelAnimationFrame(requestRef.current);
    };
  }, []);
}

let { x, y } = mousePosition;
const winDimensions = { width, height };
let endX = winDimensions.width / 2;
let endY = winDimensions.height / 2;

/**
 * Position Dot (cursor)
 * @param {event}
 */
function positionDot(e) {
  cursorVisible.current = true;
  toggleCursorVisibility();
  // Position the dot
  endX = e.pageX;
  endY = e.pageY;
  cursorDot.current.style.top = endY + "px";
  cursorDot.current.style.left = endX + "px";
}

/**
 * Toggle Cursor Visiblity
 */
function toggleCursorVisibility() {
  if (cursorVisible.current) {
    cursorDot.current.style.opacity = 1;
    cursorDotOutline.current.style.opacity = 1;
  } else {
    cursorDot.current.style.opacity = 0;
    cursorDotOutline.current.style.opacity = 0;
  }
}

/**
 * Toggle Cursor Size
 */
function toggleCursorSize() {
  if (cursorEnlarged.current) {
    cursorDot.current.style.transform =
      "translate(-50%, -50%) scale(0.7)";
    cursorDotOutline.current.style.transform =
      "translate(-50%, -50%) scale(5)";
  } else {
    cursorDot.current.style.transform = "translate(-50%, -50%) scale(1)";
    cursorDotOutline.current.style.transform =
      "translate(-50%, -50%) scale(1)";
  }
}

/**
 * Handle LInks
 * Applies mouseover/out hooks on all links
 * to trigger cursor animation
 */
function handleLinkHovers() {
  document.querySelectorAll("a").forEach((el) => {
    el.addEventListener("mouseover", () => {
      cursorEnlarged.current = true;
      toggleCursorSize();
    });
    el.addEventListener("mouseout", () => {
      cursorEnlarged.current = false;
      toggleCursorSize();
    });
  });
}

/**
 * Animate Dot Outline
 * Aniamtes cursor outline with trailing effect.
 * @param {number} time
 */
const animateDotOutline = (time) => {
    if (previousTimeRef.current !== undefined) {
      x += (endX - x) / 8;
      y += (endY - y) / 8;
      cursorDotOutline.current.style.top = y + "px";
      cursorDotOutline.current.style.left = x + "px";
    }
    previousTimeRef.current = time;
    requestRef.current = requestAnimationFrame(animateDotOutline);
  };

  return (
    <>
      <div ref={cursorDotOutline} id="cursor-dot-outline" />
      <div ref={cursorDot} id="cursor-dot" />
    </>
  );


$(function () {
  /** attendre chargement du DOM **/ /*** burger ***/ $(
    ".hamburger"
  ).click(function () {
    $(this).toggleClass("is-active");
  });
}); // fin chargement DOM

(function () {})();
{
  const link = document.querySelectorAll("nav > .hover-this");
  const cursor = document.querySelector(".cursor");

  const animateit = function (e) {
    const span = this.querySelector("span");
    const { offsetX: x, offsetY: y } = e,
      { offsetWidth: width, offsetHeight: height } = this,
      move = 25,
      xMove = (x / width) * (move * 2) - move,
      yMove = (y / height) * (move * 2) - move;

    span.style.transform = `translate(${xMove}px, ${yMove}px)`;

    if (e.type === "mouseleave") span.style.transform = "";
  };

  const editCursor = (e) => {
    const { clientX: x, clientY: y } = e;
    cursor.style.left = x + "px";
    cursor.style.top = y + "px";
  };

  link.forEach((b) => b.addEventListener("mousemove", animateit));
  link.forEach((b) => b.addEventListener("mouseleave", animateit));
  window.addEventListener("mousemove", editCursor);
}

(function () {})();

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("slider_dots--dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Allows you to use the dots to navigate to the corresponding slide
function dotPageChange(n) {
  let dots = document.getElementsByClassName("slider_dots--dot");
  let i;
  for (i = 0; i < dots.length; i++) {
    if (dots[i].id == n) {
      dots[i].className += " active";
      currentSlide(n);
    }
  }
}

//Change the input to anything but true in order to stop the animation on the slides
let toggleSlide = true;

// Change the variable below to speed up/slow down the time between slides, 1 second = 1000
let timeBetweenSlideChange = 4000;

slideAnimation(toggleSlide);

function slideAnimation(boolean) {
  if (boolean === true) {
    let interval = window.setInterval(function () {
      plusSlides(1);
    }, timeBetweenSlideChange);

    // Adding stop/start on hover to container
    let container = document.querySelector(".container");
    container.onmouseover = pauseSlides;
    container.onmouseleave = resumeSlides;

    // Adding stop/start on hover to the dots below slides
    let dots = document.getElementsByClassName("slider_dots--dot");
    for (i = 0; i < dots.length; i++) {
      dots[i].onmouseenter = pauseSlides;
      dots[i].onmouseleave = resumeSlides;
    }

    function pauseSlides() {
      clearInterval(interval); // Clear the interval we set earlier
    }

    function resumeSlides() {
      interval = window.setInterval(function () {
        plusSlides(1);
      }, timeBetweenSlideChange); // Restart the slides animation
    }
  } else {
  }
}
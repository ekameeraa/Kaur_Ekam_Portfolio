// bar
document.addEventListener("DOMContentLoaded", (event) => {
  const mobileMenu = document.getElementById("mobile-menu");
  const navList = document.getElementById("nav-list");

  mobileMenu.addEventListener("click", () => {
    navList.classList.toggle("active");
  });
});

// projects&lightboxes

function showLightbox(imageSrc, imageCaption) {
  var lightbox = document.querySelector(".lightbox");
  var lightboxImage = document.querySelector(".lightbox-content");
  var lightboxCaption = document.querySelector("#lightbox-caption");
  var lightboxInfo = document.querySelector("#lightbox-info");

  lightbox.style.display = "block";
  lightboxImage.src = imageSrc;
  lightboxCaption.innerHTML = imageCaption;
  lightboxInfo.innerHTML = additionalInfo;
}

// Function to close the lightbox
function closeLightbox() {
  var lightbox = document.querySelector(".lightbox");
  lightbox.style.display = "none";
}

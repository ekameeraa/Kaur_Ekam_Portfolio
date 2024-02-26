// bar
document.addEventListener("DOMContentLoaded", (event) => {
  const mobileMenu = document.getElementById("mobile-menu");
  const navList = document.getElementById("nav-list");

  mobileMenu.addEventListener("click", () => {
    navList.classList.toggle("active");
  });
});

// projects&lightboxes

function showLightbox(imageSrc, imageCaption, softwaresUsed, videoUrl) {
  var lightbox = document.querySelector(".lightbox");
  var lightboxImage = document.querySelector(".lightbox-content");
  var lightboxCaption = document.querySelector("#lightbox-caption");
  var lightboxInfo = document.querySelector("#lightbox-info");
  var lightboxSoftwaresUsed = document.querySelector(
    "#lightbox-softwares-used"
  );
  var lightboxvideoUrl = document.querySelector("#lightbox-video-url");

  lightbox.style.display = "block";
  lightboxImage.src = imageSrc;
  lightboxCaption.innerHTML = imageCaption;
  lightboxSoftwaresUsed.innerHTML = softwaresUsed;
  if (!videoUrl) {
    lightboxvideoUrl.style.display = "none";
  } else {
    lightboxvideoUrl.src = videoUrl;
    lightboxvideoUrl.removeAttribute("style");
  }
  //lightboxInfo.innerHTML = additionalInfo;
}

// Function to close the lightbox
function closeLightbox() {
  var lightbox = document.querySelector(".lightbox");
  lightbox.style.display = "none";
}

// contact form ajax request
(() => {
  document.addEventListener("DOMContentLoaded", (event) => {
    //declare variables
    const form = document.querySelector("#feedback_form");

    const feedBack = document.querySelector("#feedback");

    function submitEnqueryForm(event) {
      event.preventDefault();

      const thisForm = event.currentTarget;

      const url = "submit_enquery.php";
      const formData =
        "lname=" +
        thisForm.elements.lname.value +
        "&fname=" +
        thisForm.elements.fname.value +
        "&email=" +
        thisForm.elements.email.value +
        "&country=" +
        thisForm.elements.country.value +
        "&message=" +
        thisForm.elements.message.value;

      console.log(formData);

      fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: formData,
      })
        .then((response) => response.json())
        .then((responseText) => {
          console.log(responseText);
          feedBack.innerHTML = "";

          if (responseText.errors) {
            responseText.errors.forEach((error) => {
              const errorElement = document.createElement("p");
              errorElement.textContent = error;
              feedBack.appendChild(errorElement);
            });
          } else {
            form.reset();
            const messageElement = document.createElement("p");
            messageElement.textContent = responseText.message;
            feedBack.appendChild(messageElement);
          }
        })
        .catch((error) => {
          console.log(error);
          const messageElement = document.createElement("p");
          messageElement.textContent = "Something went wrong: " + error;
          feedBack.appendChild(messageElement);
        });
    }

    form.addEventListener("submit", submitEnqueryForm);
  });
})();

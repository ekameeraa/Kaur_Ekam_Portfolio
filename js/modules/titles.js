export function titles() {
  document.addEventListener("DOMContentLoaded", (event) => {
    gsap.from("h2", { opacity: 0, y: -50, duration: 1, ease: "power2.out" });

    gsap.from("h3", {
      opacity: 0,
      y: -50,
      duration: 1,
      ease: "power2.out",
      delay: 0.5,
    });

    gsap.from("h4", {
      opacity: 0,
      y: -50,
      duration: 1,
      ease: "power2.out",
      delay: 1,
    });
  });
}

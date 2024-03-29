import ExecJs from "../../../assets/js/ExecJS.js";
import ReviewsController from "../../reviews/js/ReviewsController.js";

export default class HomeController extends ExecJs {
  constructor() {
    super();
    // this.handleClickMenu();
    this.ReviewsController = new ReviewsController();
    this.revealSections();
  }

  async swiperBestProducts() {
    await this.animationFadeInCard();
    const swiper = new Swiper("#swiper--bestSellingProducts", {
      slidesPerView: "auto",
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pauseOnHover: false,
    });

    const swiperContainer = document.querySelector("#swiper--bestSellingProducts");
    const next = document.querySelector("#bestSellingProducts #next");
    const prev = document.querySelector("#bestSellingProducts #prev");

    next.addEventListener("click", () => swiper.slideNext());
    prev.addEventListener("click", () => swiper.slidePrev());
    swiperContainer.addEventListener("mouseenter", () => swiper.autoplay.stop());
    swiperContainer.addEventListener("mouseleave", () => swiper.autoplay.start());
  }

  async animationFadeInCard() {
    let delay = 300;
    const allCard = document.querySelectorAll("#swiper--bestSellingProducts .swiper-slide");
    allCard.forEach((card, index) => {
      setTimeout(() => card.classList.add("FadeUp"), delay * (index + 1));
    });
  }
  revealSections() {
    const allSections = document.querySelectorAll("section.section");
    const revealSection = ([entry], observer) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.remove("opacity-0", "translate-y-52");
      entry.target.id === "bestSellingProducts" && this.swiperBestProducts();
      console.log(entry.target.id === "bestSellingProducts");
      observer.unobserve(entry.target);
    };
    const sectionObserver = new IntersectionObserver(revealSection, {
      root: null,
      threshold: 0.15,
    });
    [...allSections].forEach((section) => {
      sectionObserver.observe(section);
      section.classList.add("opacity-0", "translate-y-52");
    });
  }
}

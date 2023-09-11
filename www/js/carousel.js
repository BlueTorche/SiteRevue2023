const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
    button.addEventListener("click", () => {
        const offset = button.dataset.carouselButton === "next" ? 1 : -1
        const slides = button.closest("[data-carousel]").querySelector("[data-slides]")
        const activeSlide = slides.querySelector("[data-active]")

        let nbrSlides = slides.children.length

        for (let i = 0; i < nbrSlides; i++) {
            slides.children[i].classList.remove('prev-slide')
            slides.children[i].classList.remove('next-slide')
        }

        let actualIndex = [...slides.children].indexOf(activeSlide)
        slides.children[actualIndex].classList.add(offset === 1 ? 'prev-slide' : 'next-slide')

        let furtherNewIndex = (actualIndex + 2*offset)%nbrSlides
        if (furtherNewIndex < 0) furtherNewIndex = nbrSlides + furtherNewIndex
        slides.children[furtherNewIndex].classList.add(offset === 1 ? 'next-slide' : 'prev-slide')


        let newIndex = (actualIndex + offset)%nbrSlides
        if (newIndex < 0) newIndex = nbrSlides + newIndex


        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active

        const slidesClass = document.querySelectorAll('.slide');

    })
})
document.addEventListener('DOMContentLoaded', () => {
    const slides = [
        {
            image:"/media/media_webp/ingredients/avocadoExtract.webp",
            label:"Deep Nutrition - Avocado Oil"
        },
        {
            image:"/media/media_webp/ingredients/pomegranateOil.webp",
            label:"Antioxidant Boost - Pomegranate Oil"
        },
        {
            image:"/media/media_webp/ingredients/teaTreeOil.webp",
            label:"Scalp Balance - Tea Tree Oil"
        },
        {
            image:"/media/media_webp/ingredients/coconutOil.webp",
            label:"Moisture Lock - Coconut Oil"
        },
        {
            image:"/media/media_webp/ingredients/sheaButter.webp",
            label:"Moisture Seal - Shea Butter"
        }
    ];

    let index = 0;

    const imageElements = document.querySelectorAll('.hero-image');
    const heroTag = document.getElementById('hero-tag');
    const dots = document.querySelectorAll('.dot');
    const heroBg = document.querySelector('.hero-bg');

    /*Initial state*/
    imageElements[0].style.backgroundImage = `url(${slides[0].image})`;
    heroTag.textContent = slides[0].label;

    /*change of slides*/

    function showSlide(newIndex) {
        index = newIndex;
        const nextImage = imageElements[1];
        nextImage.style.backgroundImage = `url(${slides[newIndex].image})`;
        nextImage.classList.add('active');
        heroTag.style.opacity = "0";

        setTimeout(()=>{
            heroTag.textContent = slides[index].label;
            heroTag.style.opacity = "1";
        },300);

        dots.forEach(d => d.classList.remove('active'));
        dots[index].classList.add('active');

        setTimeout(()=>{
            imageElements[0].style.backgroundImage = `url(${slides[index].image})`;
            nextImage.classList.remove('active');
        },1500);
    }
    function changeHeroImage() {
        showSlide((index + 1) % slides.length);
    }

    let slider = setInterval(changeHeroImage, 6000);

    /*now dot usage*/
    dots.forEach(dot => {
        dot.addEventListener('click', ()=>{
            clearInterval(slider);
            const newIndex = parseInt(dot.dataset.index);
            showSlide(newIndex);
            slider = setInterval(changeHeroImage, 6000);
        });
    });

    /*mouse movement*/
    document.addEventListener("mousemove", e => {
        const x = (e.clientX / window.innerWidth - 0.5) * 20 ;
        const y = (e.clientY / window.innerHeight - 0.5) * 20 ;

        heroBg.style.transform = `translate(${x}px,${y}px)`;
    });
});

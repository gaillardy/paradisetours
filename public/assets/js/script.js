$(document).ready(function () {
    const slider = $("#slider");
    const slideWidth = $(".slide").outerWidth(true); // Largeur d'un slide avec marges
    const totalSlides = $(".slide").length;
    let currentIndex = 0;
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;

    // Navigation avec les boutons
    function moveSlider() {
        slider.css("transform", `translateX(${-currentIndex * slideWidth}px)`);
    }

    $(".next-btn").click(function () {
        if (currentIndex < totalSlides - 4) {
            currentIndex++;
        } else {
            currentIndex = 0; // Revenir au début
        }
        moveSlider();
    });

    $(".prev-btn").click(function () {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 4; // Aller à la fin
        }
        moveSlider();
    });

    // Détection du début du drag
    slider.on("mousedown touchstart", function (e) {
        isDragging = true;
        startX = e.pageX || e.originalEvent.touches[0].pageX;
        slider.css("cursor", "grabbing");
    });

    // Déplacement pendant le drag
    slider.on("mousemove touchmove", function (e) {
        if (!isDragging) return;
        const currentX = e.pageX || e.originalEvent.touches[0].pageX;
        const moveX = currentX - startX;
        currentTranslate = prevTranslate + moveX;
        slider.css("transform", `translateX(${currentTranslate}px)`);
    });

    // Fin du drag
    $(document).on("mouseup touchend", function () {
        if (isDragging) {
            isDragging = false;
            slider.css("cursor", "grab");
            const threshold = slideWidth / 4;
            if (currentTranslate - prevTranslate > threshold && currentIndex > 0) {
                currentIndex--;
            } else if (prevTranslate - currentTranslate > threshold && currentIndex < totalSlides - 4) {
                currentIndex++;
            }
            moveSlider();
            prevTranslate = -currentIndex * slideWidth;
        }
    });

    // Défilement automatique
    let autoSlide = setInterval(function () {
        if (!isDragging) {
            if (currentIndex < totalSlides - 4) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            moveSlider();
        }
    }, 3000);

    // Pause sur hover
    slider.hover(
        function () {
            clearInterval(autoSlide);
        },
        function () {
            autoSlide = setInterval(function () {
                if (currentIndex < totalSlides - 4) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                moveSlider();
            }, 3000);
        }
    );
});
const sr = ScrollReveal();

sr.reveal('h1', {
    origin: "right",
    duration: 2000
});


sr.reveal('#gamesScroll', {
    origin: "left",
    distance: "1000px",
    duration: 2000,
    reset: true
});

sr.reveal('.box-inner', {
    origin: "top",
    distance: "5px",
    duration: 2500
});



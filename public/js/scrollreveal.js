const sr = ScrollReveal();

sr.reveal('h1', {
    origin: "top",
    duration: 2000
});


sr.reveal('#gamesScroll', {
    origin: "left",
    distance: "1000px",
    duration: 2000,
    reset: false
});

sr.reveal('.box-inner', {
    origin: "top",
    distance: "5px",
    duration: 2500,
    reset: false
});


sr.reveal(".aboutText", {
    origin: "left",
    distance: "100px",
    duration: 2500,
    reset: true
})

sr.reveal(".aboutButton", {
    origin: "bottom",
    distance: "100px",
    duration: 2500,
    reset: true
})


sr.reveal("#aboutImage", {
    origin: "top",
    distance: "200px",
    duration: 2500,
    reset: false
})

sr.reveal(".comment-title", {
    origin: "top",
    distance: "80px",
    duration: 1500,
    reset: false
})

sr.reveal(".comment-body", {
    origin: "bottom",
    distance: "150px",
    duration: 2000,
    reset: false

})

sr.reveal(".comment-body-timing", {
    origin: "bottom",
    distance: "150px",
    duration: 2500,
    reset: true
})

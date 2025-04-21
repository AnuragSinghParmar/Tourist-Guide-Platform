function changeVideo(type) {
    const video = document.getElementById("bgVideo");
    const videoMap = {
        culture: "videos/culture.mp4",
        nature: "videos/nature.mp4",
        wildlife: "videos/wildlife.mp4"
    };

    if (videoMap[type]) {
        video.pause();
        video.querySelector("source").src = videoMap[type];
        video.load();
        video.play();
    }
}

// very simple toggle function that mutes the video
function muteToggle(button){
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);
}
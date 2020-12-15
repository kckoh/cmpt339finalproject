function muteToggle(button){
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);
}
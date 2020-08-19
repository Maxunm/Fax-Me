function onload() {
    var myDropzone = new Dropzone("div#uploadSquare", { url: "upload.php" });

    var cookie = document.cookie;
    document.cookie = "status=none";

    if (cookie == "") {
        window.location.reload(false);
    }

    if (cookie == "status=success") {
        $('#successToast').toast('show');
        glowSuccess();
    } else if (cookie == "status=failure") {
        $('#failureToast').toast('show');
        glowFailure();
    }
}

function glowSuccess() {
    setTimeout(function() {
        document.getElementById('uploadSquare').classList.remove('successGlow');
    }, 1500);
    document.getElementById('uploadSquare').classList.add('successGlow');
}

function glowFailure() {
    setTimeout(function() {
        document.getElementById('uploadSquare').classList.remove('failureGlow');
    }, 1000);
    document.getElementById('uploadSquare').classList.add('failureGlow');
}
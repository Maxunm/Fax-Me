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
    setTimeout(function() {
        document.getElementById('successToast').style.display = "none";
    }, 5500);
    document.getElementById('uploadSquare').classList.add('successGlow');
    document.getElementById('successToast').style.display = "block";
}

function glowFailure() {
    setTimeout(function() {
        document.getElementById('uploadSquare').classList.remove('failureGlow');
    }, 1000);
    setTimeout(function() {
        document.getElementById('failureToast').style.display = "none";
    }, 5500);
    document.getElementById('uploadSquare').classList.add('failureGlow');
    document.getElementById('failureToast').style.display = "block";
}
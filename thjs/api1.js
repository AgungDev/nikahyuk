var pswd = "kosong";

function mempelai(){
    $.ajax({
        type: "POST",
        url: "phpfiles/mempelai.php",
        data: {password: pswd, },   // <== change is here
        success: function(respond){
            $(".content").html(respond);
        }
    });
}

function empty(){
    $.ajax({
        type: "POST",
        url: "phpfiles/404.html",
        data: {password: pswd, },   // <== change is here
        success: function(respond){
            $(".content").html(respond);
        }
    });
}

window.addEventListener('hashchange', function() {
    var hash = window.location.hash;
    urlSelect(hash);
});

urlSelect(window.location.hash);

function urlSelect(hash){
    if (hash) {
        // Fragment exists
        hash = hash.substring(1);
        removeActiveNav();
        $("."+hash).addClass("active");
        console.log(hash);
        if (hash == "mempelai"){
            mempelai();
        }else{
            empty();
        }
    }
}

function removeActiveNav(){
    $(".mempelai").removeClass("active");
    $(".tempat").removeClass("active");
}



// let navIcon = document.querySelector('.nav-icon');
// let topNav = document.querySelector('.to-nav');
// navIcon.addEventListener('click', function(e){
//    navIcon.classList.toggle('open');
//     topNav.classList.toggle('show');
// });

$(document).ready(function(){
    $(".formSwap").each(function(){
        $(this).on("click",function(){
        let targetForm = $(this).data("target");
        $(`.${targetForm}`).slideDown();
        $(this).parent().slideUp();
    });
});
    $(".accountForm").each(function(){
        $(this).on("submit",function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "./controllers/usermgt.php",
                cache: false,
                contentType: false,
                processData: false,
                data: new FormData(this),
                beforeSend: () => {
                    $(this).find("button").html("Processing...");
                    $(this).find("button").attr("disabled", true);
                },
                success: (res) => {
                    $(this).find("button").html("Processing...");
                    $(this).find("button").attr("disabled", false);
                    res = JSON.parse(res);
                    const {status, title, btn, icon, comment} =res;
                    swal(title, comment, {
                        icon,
                        buttons: {
                            confirm: { className: btn}
                        }
                    });
                    if(res.status == true) setTimeout(() => {
                    location.replace("./profile"); 
                    }, 1500);
                },
            });
            return false;
        });
    });
})
<section class="top2">
    <i class="fa fa-arrow-left lecturer-arrow"></i>
</section>

<div class="toggle">
    <div class="toggle_menu"></div>
    <div class="menu">
        <div class="fa fa-home home"></div>
        <div class="fa fa-commenting commenter"></div>
        <div class="fa fa-calendar upcoming"></div>
        <div class="fa fa-shopping-bag bl"></div>
    </div>
</div>



<script>
    $('.lecturer-arrow').on('click',function(){
                    dataki= "id="+2;
                        $.ajax({
								url: "Home_Page.html",
								type: "GET",
								data: "dataki",
								contentType : false,
								cache : false,
								processData:false,
								crossDomain: true,

								beforeSend:function(data){
									$('.content').html('<div class="moodloader"><img src="image/mood.gif"><img src="image/loader.gif" class="loading"></div>')
								},

								success:function(para2){
									$('.content').html(para2);
                                    $('.top-container').show();
                                    $('.menu-bar').show();
                                    
								},

								error:function(data){
									alert('Failed to process');
								}
							});
                })

    
    const menuBtn = document.querySelector('.toggle_menu')
    const navlinks = document.querySelector('.menu')

    menuBtn.addEventListener('click',()=>{
        navlinks.classList.toggle('mobile-menu')
    })
</script>
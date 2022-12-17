<style>

    .events{
        height: 30%;
        width: 94%;
        box-shadow: 1px 1px 3px gray;
        margin: 1.5% 3%;
        border-radius: 3px;
    }
    .event-photo{
        position: relative;
        height: 100%;
        width: 100%;
        border-radius: 3px;
        z-index: 1;
        opacity: 0.9;
    }
    .event-photo:hover{
        opacity: 1;
    }
    .page-title{
        font-size: 30px;
        color: #c7313d;
        font-weight: bolder;
        margin: auto auto;
        margin-top: 4%;
        text-shadow: -1px 1px 5px #f3f3f3;
    }
    .More-Info{
        position: relative;
        height: 30%;
        background-color: pink;
        bottom: 60px;
        z-index: 100;
    }

</style>

<section style="height: 100vh; display: flex; flex-direction: column; overflow: auto;">

    <section class="top2">
        <div class="fa fa-arrow-left lecturer-arrow"></div>
    </section>

    <p class="page-title">Upcoming Events</p>
    <div class="events" style="margin-top: 10%;">
        <a>
            <img src="./Images/Event1.jpg" alt="Event1" class="event-photo">
        </a>
        <div class="More-Info"></div>
    </div>
    <div class="events">
        <a><img src="./Images/Event2.jpg" alt="Event2" class="event-photo"></a>
    </div>
    <div class="events">
        <a><img src="./Images/Event3.jpg" alt="Event3" class="event-photo"></a>
    </div>
    <div class="events">
        <a><img src="./Images/Event4.jpg" alt="Event4" class="event-photo"></a>
    </div>
</section>
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
</script>
<section class="lecturer_div">
    <section class="top2">
        <div class="fa fa-arrow-left lecturer-arrow"></div>
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
    <div class="baby"></div>
    <div style="margin-top: 50px;">yugugyugigtyggvkhyugvkhvgkh</div>
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


    $('.menu').hide();
    $('.baby').hide();
    $(".lecturer_div").on('click',function(){
        
    });

    $('.toggle_menu').on('click',function(){
        $('.menu').slideToggle("2000");
        $('.baby').slideToggle("2000");
    });
    $('.baby').on('click',function(){
        $('.baby').hide("2000");
        $('.menu').slideUp("2000");
    });

    $('.commenter').on('click',function(){
                    datachat= "id="+2;
                        $.ajax({
								url: "chat.php",
								type: "GET",
								data: "datachat",
								contentType : false,
								cache : false,
								processData:false,
								crossDomain: true,

								beforeSend:function(data){
									$('.content').html('<div class="moodloader"><img src="image/mood.gif"><img src="image/loader.gif" class="loading"></div>')
								},

								success:function(para2){
									$('.content').html(para2);
                                    $('.top-container').hide();
									$('.menu-bar').hide();
                                    
								},

								error:function(data){
									alert('Failed to process');
								}
						});
    })

                $('.home').on('click',function(){
                    datahome= "id="+2;
                        $.ajax({
								url: "Home_Page.html",
								type: "GET",
								data: "datahome",
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
                                    
								},

								error:function(data){
									alert('Failed to process');
								}
							});
                })

                $('.upcoming').on('click',function(){
                    dataevent= "id="+2;
                        $.ajax({
								url: "eventplanner.php",
								type: "GET",
								data: "dataevent",
								contentType : false,
								cache : false,
								processData:false,
								crossDomain: true,

								beforeSend:function(data){
									$('.content').html('<div class="moodloader"><img src="image/mood.gif"><img src="image/loader.gif" class="loading"></div>')
								},

								success:function(para2){
									$('.content').html(para2);
                                    $('.top-container').hide();
                                    
								},

								error:function(data){
									alert('Failed to process');
								}
							});
                })

                $('.bl').on('click',function(){
                    databl= "id="+2;
                        $.ajax({
								url: "blackmarket.php",
								type: "GET",
								data: "databl",
								contentType : false,
								cache : false,
								processData:false,
								crossDomain: true,

								beforeSend:function(data){
									$('.content').html('<div class="moodloader"><img src="image/mood.gif"><img src="image/loader.gif" class="loading"></div>')
								},

								success:function(para2){
									$('.content').html(para2);
                                    $('.top-container').hide();
                                    $('.menu-bar').hide();
                                    
                                    
								},

								error:function(data){
									alert('Failed to process');
								}
							});
                })
    
</script>
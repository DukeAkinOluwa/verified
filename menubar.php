<div class="social_handles">
                <div class="fa fa-home home"></div>
                <div class="fa fa-commenting commenter"></div>
                <div class="fa fa-user-secret lecturer"></div>
                <div class="fa fa-calendar upcoming"></div>
                <div class="fa fa-shopping-bag bl"></div>

            </div>
            <script>
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

                $('.lecturer').on('click',function(){
                    datalec= "id="+2;
                        $.ajax({
								url: "lecturerbanter.php",
								type: "GET",
								data: "datalec",
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
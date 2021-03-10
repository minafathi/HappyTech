$(document).ready(function(){
                
    if($(".home  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".home").attr("class","nav-item home active");
    }
    if($(".dashboard  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".dashboard").attr("class","nav-item dashboard active");
    }
    if($(".pending  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".pending").attr("class","nav-item pending active");
    }
    if($(".reviewed  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".reviewed").attr("class","nav-item reviewed active");
    }
    if($(".app  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".app").attr("class","nav-item app active");
    }
    if($(".feedback  a").attr("href")==window.location.href){
        $('.nav-item').removeClass('active');
        $(".feedback").attr("class","nav-item feedback active");
    }
        
	$('.addcm').click(function(){
        var c = $('.cmbox').children().length +1
        $('.cmbox').append('<p><strong>Comment '+c+'</strong><input type="text" name="comment[]" placeholder="Enter a Comment" /></p>')
    
    })
        
    
});

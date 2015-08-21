jQuery.fn.extend({
  haccordion: function(params){
    var jQ = jQuery;
    var params = jQ.extend({
      speed: 500,
      headerclass: "header",
      contentclass: "content",
      event: "click",
	  contentwidth: 565
    },params);
    return this.each(function(){
     this.opened = jQ("."+params.contentclass,this).filter(".visible").prev();
      jQ("."+params.headerclass,this).click(function(){
        var p = jQ(this).parent()[0];
        if (p.opened != "undefined"){
          jQ(p.opened).next("div."+params.contentclass).animate({
            width: "0px"
          },params.speed);
        }
        p.opened = this;
        jQ(this).next("div."+params.contentclass).animate({
          width: params.contentwidth + "px"
        }, params.speed);
      });
    });
  }
});
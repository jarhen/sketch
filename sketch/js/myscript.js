$(document).ready(function(){
	 $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff','#f1a12f','#a94442'], function() {
      $('#colors_demo .tools').append("<a href='#colors_sketch' class='colors btn' data-color='" + this + "' style='background: " + this + ";'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> ");
    });
    $.each([1,2,3,4,5,6,7,8,9,10], function() {
      $('#colors_demo .tools1').append("<a class='colors btn' href='#colors_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
    });
    $('#colors_sketch').sketch();
    $('.eraser').click(function(){
		//pagclick ng button na eraser palitan ang cursor ng eraser icon
	    var x = document.getElementById("colors_sketch");
		x.style.cursor = "url(eraser.cur), none";
	});
	$('.marker').click(function(){
		//pagclick ng button na eraser palitan ang cursor ng eraser icon
	    var x = document.getElementById("colors_sketch");
		x.style.cursor = "url(pencil.cur), none";
	});
	
	
	 $.sketch.tools.true_eraser = {
  onEvent: function(e) {
    return $.sketch.tools.marker.onEvent.call(this, e);
  },
  draw: function(action) {
    var oldcomposite;
    oldcomposite = this.context.globalCompositeOperation;
    this.context.globalCompositeOperation = "destination-out";
    action.color = "rgba(0,0,0,1)";
    $.sketch.tools.marker.draw.call(this, action);
    return this.context.globalCompositeOperation = oldcomposite;
  }
};
});
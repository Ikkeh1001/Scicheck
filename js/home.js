
function gethomedata(){
  $.post("api.php",{
    "action":"GET_HOME_DATA"
  },function(data){
    var response=JSON.parse(data);
    response.forEach(function(element){
      console.log(element);
      var dingetje = $('.template').html();
      $(".homecarouselinner").append("<div class='carousel-item active id"+element["id"]+"'>"+dingetje+"</div>");
      $(".id"+element["id"]+" .article-title").html(content[parseInt(element["id"])-1][0]);
      $(".id"+element["id"]+" .descriptiontext").html(content[parseInt(element["id"])-1][1]);
    });
  });
}

$(document).ready(function(){
gethomedata();
});

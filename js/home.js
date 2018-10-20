
function gethomedata(){
  $.post("api.php",{
    "action":"GET_HOME_DATA"
  },function(data){
    var response=JSON.parse(data);
    response.forEach(function(element){
      console.log(element);
      var dingetje = $('.carousel-item.template').html();
      $(".homecarouselinner").append("<div class='carousel-item id"+element["id"]+"'>"+dingetje+"</div>");
      $(".id"+element["id"]+" .article-title").html(content[parseInt(element["id"])-1][0]);
      $(".id"+element["id"]+" .descriptiontext").html(content[parseInt(element["id"])-1][1]);
      var img = new Image();
      img.src= "../img/id"+element["id"]+".jpg";
      $(".id"+element["id"]+" .pictureclass").attr("style","background-image: url(../img/id"+element["id"]+".jpg);");


      var listitem = $(".id"+element["id"]+" .sfilist").html();
      $(".id"+element["id"]+" .list-item-template").remove();
      var subsitem = [["category","quantqual","apl_geo","apl_social","p_hacking"],["Category:","Research type:","Applicable in:","Applicable to:","P-hacking?"]];

      for (i=0;i<5;i++){
        $(".id"+element["id"]+" .sfilist").append(listitem);
        $(".id"+element["id"]+" .list-item-template p.list-item-template-left").html(subsitem[1][i]);
        $(".id"+element["id"]+" .list-item-template p.list-item-template-right").html(element[subsitem[0][i]]);
        $(".id"+element["id"]+" .list-item-template").removeClass("list-item-template");
      }

    });
    $(".homecarouselinner").children(":first").addClass("active");

  });
}

function getarchivedata(){
  $.post("api.php",{
    "action":"GET_ARCHIVE_DATA"
  },function(data){
    var response = JSON.parse(data);
    var categories = [];
    var counter = [];
    response.forEach(function(element){
      var index = $.inArray(element["category"],categories);
      if(index === -1){
        $.merge(categories,[element["category"]]);
        $.merge(counter,[1]);
      }
      else{
        counter[index] += 1;
      }

    });
    var ding = $(".archive-categories ul").html();
    $(".archive-categories ul li").remove();
    for(i=0;i<categories.length;i++){
      $(".archive-categories ul").append(ding);
      $(".archive-categories li.wip").html(categories[i]+"<span class='badge badge-primary badge-pill'>"+counter[i]+"</span>");
      $(".archive-categories li.wip").removeClass("wip");
    }
    $(".archive-categories ul").removeClass("template");
    $(".archive-categories ul").children(":first").attr("style","border-top:0;")

  });
}

$(document).ready(function(){
  $('#maincarousel').carousel({
    interval: 10000
});
gethomedata();
getarchivedata();
});

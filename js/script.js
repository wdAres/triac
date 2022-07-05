
$('.right-side-slider').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 879,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

$('#brand-slider').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows:true,
  autoplay: true,
  autoplaySpeed: 2000,
  infinite: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2.5
        }
      },
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 1
        }
      }
      ,
      {
        breakpoint: 563,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });


$('#certificate-slider').slick({
    infinite: false,
    slidesToShow:3,
    slidesToScroll: 1,
    arrows:false,
    responsive: [
      
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2
        }
      }
      ,
      {
        breakpoint: 563,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });


filterSelection("btn-1-content")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "") c = "btn-1-content";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
} 


// $('#home-slider').slick({
//   infinite: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows : false
// });

function ShowWwa() {  
  $("#wwa-content").toggle();
  $("#more-wwa").toggle();
  $(".new-lb").css("height" , "570px" );
}
function HideWwa() {  
  $("#wwa-content").toggle();
  $("#more-wwa").toggle();
  $(".new-lb").css("height" , "360px" );
}
/*var red = #db3236;
var blue = #4885ed;
var green = #3cba54;
var yellow = #f4c20d;*/
var about;
var rom;
var app;
var review;

function timechange(){
  var d = new Date();
  var h = d.getHours();

  if((h>=0)&&(h<6)){
    document.getElementById('header').style.backgroundColor="#db3236";
    document.getElementById('footer').style.backgroundColor="#db3236";
    document.getElementById('gred').style.color="#3cba54";
  }else if((h>=6)&&(h<12)){
      document.getElementById('header').style.backgroundColor="#4885ed";
      document.getElementById('footer').style.backgroundColor="#4885ed";
      document.getElementById('gblue').style.color="#f4c20d";
  }else if((h>=12)&&(h<18)){
      document.getElementById('header').style.backgroundColor="#3cba54";
      document.getElementById('footer').style.backgroundColor="#3cba54";
      document.getElementById('ggreen').style.color="#db3236";
  }else if((h>=18)&&(h<24)){
      document.getElementById('header').style.backgroundColor="#f4c20d";
      document.getElementById('footer').style.backgroundColor="#f4c20d";
      document.getElementById('gyellow').style.color="#4885ed";
  }
}

function aboutshow(){
  about = "active";
  review = "inactive";
  app = "inactive";
  rom = "inactive";
  document.getElementById('about').style.display = "display";
  document.getElementById('review').style.display = "none";
  document.getElementById('app').style.display = "none";
  document.getElementById('rom').style.display = "none";
}
function reviewshow(){
  about = "inactive";
  review = "active";
  app = "inactive";
  rom = "inactive";
  document.getElementById('about').style.display = "none";
  document.getElementById('review').style.display = "display";
  document.getElementById('app').style.display = "none";
  document.getElementById('rom').style.display = "none";
}

function appshow(){
  about = "inactive";
  review = "inactive";
  app = "active";
  rom = "inactive";
  document.getElementById('about').style.display = "none";
  document.getElementById('review').style.display = "none";
  document.getElementById('app').style.display = "display";
  document.getElementById('rom').style.display = "none";
}

function romshow(){
  about = "inactive";
  review = "active";
  app = "inactive";
  rom = "inactive";
  document.getElementById('about').style.display = "none";
  document.getElementById('review').style.display = "none";
  document.getElementById('app').style.display = "none";
  document.getElementById('rom').style.display = "display";
}

function moveup(){
  if(review === "active"){
    aboutshow();
  }else if(app === "active"){
    reviewshow();
  }else if(rom === "active"){
    appshow();
  }else{}
}

function movedown(){
  if(about === "active"){
    reviewshow();
  }else if(review === "active"){
    appshow();
  }else if(app === "active"){
    romshow();
  }else{}
}

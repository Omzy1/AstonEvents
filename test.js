function showAlert() {
//this is a basic alert message
    window.alert("You need to login first");

}
//declaring variables 
 var football_card = document.getElementById('football-card');
 var basketball_card = document.getElementById('basketball-card');
 var art_card = document.getElementById('art_card');
 var history_card = document.getElementById('History_card');
 var music_card = document.getElementById('music_card');
 var talks_card =document.getElementById('talks_card');
 //function sport for displaying only sport
function showSport() {
  football_card.style.display = "block";
  basketball_card.style.display = "block";
  history_card.style.display = "none";
 art_card.style.display = "none";
  music_card.style.display = "none";
  talks_card.style.display = "none";

}
//culture function for display olny culture
function showCulture() {
  football_card.style.display = "none";
  basketball_card.style.display = "none";
  history_card.style.display = "block";
 art_card.style.display = "block";
  music_card.style.display = "none";
  talks_card.style.display = "none";
}
//function for others for displaying only others
function showOthers() {
  football_card.style.display = "none";
  basketball_card.style.display = "none";
  history_card.style.display = "none";
 art_card.style.display = "none";
  music_card.style.display = "block";
  talks_card.style.display = "block";
}

//this is the function for all the category sortiing
function showAll() {
  football_card.style.display = "block";
  basketball_card.style.display = "block";
  history_card.style.display = "block";
  art_card.style.display = "block";
  music_card.style.display = "block";
  talks_card.style.display = "block";
  basketball_card.style.order = 6;
  football_card.style.order = 5;
  history_card.style.order = 4;
  art_card.style.order = 3;
  talks_card.style.order = 2;
  music_card.style.order = 1;
}
//this function sort all the category by date
function showDate() {
  football_card.style.display = "block";
  basketball_card.style.display = "block";
  history_card.style.display = "block";
  art_card.style.display = "block";
  music_card.style.display = "block";
  talks_card.style.display = "block";
  basketball_card.style.order = 1;
  football_card.style.order = 2;
  history_card.style.order = 3;
  art_card.style.order = 4;
  talks_card.style.order = 5;
  music_card.style.order = 6;
}






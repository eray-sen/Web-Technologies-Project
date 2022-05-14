const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com",
    "X-RapidAPI-Key": "02f3d604d5mshcdd2e4be9aaebe2p179ed8jsndcd978787617",
  },
};

fetch(
  "https://online-movie-database.p.rapidapi.com/auto-complete?q=europe",
  options
)
  .then((response) => response.json())
  .then((data) => {
    const list = data.d;
    list.map((item) => {
      const name = item.l;
      const poster = item.i.imageUrl;
      const movie =
        '<li><img src="' + poster + '"> <h3>"' + name + '"</h3></li>';
      document.querySelector(".movies").innerHTML += movie;
    });
  });

// const options = {
//   method: "GET",
//   headers: {
//     "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com",
//     "X-RapidAPI-Key": "02f3d604d5mshcdd2e4be9aaebe2p179ed8jsndcd978787617",
//   },
// };

// fetch(
//   "https://online-movie-database.p.rapidapi.com/auto-complete?q=football",
//   options
// )
//   .then((response) => response.json())
//   .then((response) => console.log(response))
//   .catch((err) => console.error(err));

// const options = {
//   method: "GET",
//   headers: {
//     "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com",
//     "X-RapidAPI-Key": "02f3d604d5mshcdd2e4be9aaebe2p179ed8jsndcd978787617",
//   },
// };

// fetch(
//   "https://online-movie-database.p.rapidapi.com/auto-complete?q=game%20",
//   options
// )
//   .then((response) => response.json())
//   .then((response) => console.log(response))
//   .catch((err) => console.error(err));

// const options = {
//   method: "GET",
//   headers: {
//     "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com",
//     "X-RapidAPI-Key": "02f3d604d5mshcdd2e4be9aaebe2p179ed8jsndcd978787617",
//   },
// };

// fetch(
//   "https://online-movie-database.p.rapidapi.com/auto-complete?q=basketball",
//   options
// )
//   .then((response) => response.json())
//   .then((response) => console.log(response))
//   .catch((err) => console.error(err));

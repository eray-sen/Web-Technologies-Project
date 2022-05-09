const options = {
    method: "GET",
    headers: {
      "X-RapidAPI-Host": "football-web-pages1.p.rapidapi.com",
      "X-RapidAPI-Key":
        "02f3d604d5mshcdd2e4be9aaebe2p179ed8jsndcd978787617",
    },
  };

  fetch(
    "https://football-web-pages1.p.rapidapi.com/league-table.json?comp=1&team=1",
    options
  )
    .then(function (response) {
      return response.json();
    })
    .then(function (teams) {
      let output = "<ul>";
      teams.foreach(function (team) {
        output += `<li> Teams: $(teams) <li>`;
      });
      document.getElementById("box").innerHTML += output;
    });
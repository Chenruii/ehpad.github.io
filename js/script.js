const weatherIcons = {
    "Clear": "wi wi-day-sunny",
    "snow": "wi wi-day-snow",
    "mist": "wi wi-day-fog",
    "Drizzle": "wi wi-day-sleet",
    "rain": "wi wi-day-rain",
    "clouds": "wi wi-day-cloudy",
};

function capitalize(str) {
    return str[0].toUpperCase() + str.slice(1);
}

function displayWeatherInfo(data) {

    const name = data.name;
    const temperature = data.main.temp;
    const condition = data.weather[0].main;
    const description = data.weather[0].description;

    document.querySelector('#ville').textContent = "La météo de " + name;
    document.querySelector('#temp').textContent = Math.round(temperature);
    document.querySelector('#condition').textContent = "le temps est " + capitalize(description);

    document.querySelector('i.wi').className = weatherIcons[conditions];
    document.body.className = condition.toLowerCase();
}

// le parametre qui mete par defaut le ip
async function main(withIP = true) {
    let ville;
    if (withIP) {
        // recup ip du pc
        const ip = await fetch('https://api.ipify.org?format=json')
            .then(res => res.json())
            .then(json => json.ip);

        // voir ip de la geolocalisation
        ville = await fetch('http://freegeoip.net/json/' + ip)
            .then(res => res.json())
            .then(json => json.city);
    } else {
        ville = document.querySelector('#ville').textContent;
    }
    // voir la meteo
    //const apikey = "40cb5214489b90e97b62bfa759fcaed2";
    const meteo = await fetch("http://api.openweathermap.org/data/2.5/weather?q=paris&units=metric&appid=40cb5214489b90e97b62bfa759fcaed2"
    )
        .then((res) => res.json())
        .then(json => json);

    // aficher info du meteo
    displayWeatherInfo(meteo)
}

const ville = document.querySelector('#ville');
// on veut mod la ville lors d'un click
ville.addEventListener('click', () => {
    ville.contentEditable = true;
});

// on veux s'asurer que quand on rentre avec touche entreil va pas a l aligne
ville.addEventListener('keydown', (e) => {
    if (e.keyCode === 13) {
        e.preventDefault();
        // ici on assure on ne plus editer
        ville.contentEditable = false;
        // on ne traveill plus avec lip par defaut
        main(false);
    }

})
main();
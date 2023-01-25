document.onload(FlightCard());
function FlightCard() {
  const data = [
    {
      Id: 0,
      direction: 'Warsaw (WAW) - Dubaj (DXB)',
      flight: '29-10-2023',
      return: '30-10-2023',
      price: 23,
      image: 'build/index/flghtsImg/dubai.jpg',
    },
    {
      Id: 1,
      direction: 'Warsaw (WAW) - Miami (MIA)',
      flight: '5-11-2023',
      return: '11-11-2023',
      price: 323,
      image: 'build/index/flghtsImg/miami.jpg',
    },
    {
      Id: 2,
      direction: 'Warsaw (WAW) - Mubai (BOM)',
      flight: '14-10-2023',
      return: '1-11-2023',
      price: 113,
      image: 'build/index/flghtsImg/mubai.jpg',
    },
  ];

  data.map((element) => {
    const flight = document.createElement('div');
    const paragraph = document.createElement('p');
    const direction = document.createElement('h3');
    const img = document.createElement('img');
    const div = document.createElement('div');
    const span = document.createElement('span');
    const button = document.createElement('button');
    const title = document.createTextNode(element.direction);
    const price = document.createTextNode(element.price + 'zł');
    const details = document.createTextNode('Flight Details');
    const buttonText = document.createTextNode('Select');
    direction.appendChild(title);
    paragraph.appendChild(details);
    flight.setAttribute('id', element.Id);
    flight.classList.add('flight');
    direction.classList.add('direction');
    const flightContainer = document.getElementById('flightBoardId');
    flightContainer.appendChild(flight);
    flight.appendChild(paragraph);
    flight.appendChild(direction);
    flight.appendChild(img);
    img.src = element.image;
    flight.appendChild(div);
    div.appendChild(span);
    span.appendChild(price);
    div.appendChild(button);
    button.append(buttonText);
    button.addEventListener('click', () => reserveFlight(button, element.Id));
  });
  function reserveFlight(button, id) {
    button.innerHTML = 'Reserved';
    document.getElementById(id).classList.add('reserved');
  }
}

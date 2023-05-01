
const fruitList = ['apple', 'banana', 'orange' ];

const ulElement = document.querySelector('ul');

fruitList.forEach((fruit) => {
  const itemElement = document.createElement('li');
  itemElement.textContent = fruit;
  ulElement.appendChild(itemElement);
});


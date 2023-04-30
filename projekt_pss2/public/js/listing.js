function ajaxPostForm(url, page=1)
{
	const filters = document.querySelector("#filters");
	const selected = document.querySelector('input[name="type"]:checked');
	console.log(selected)

	let fetchUrl = `${url}?page=${page}`;
	selected !== null ? fetchUrl += `&type=${selected.value}` : null;

	fetch(fetchUrl)
	.then(function (response) {
		return response.json()
	})
	.then(function (body) {
		const cars = body.cars;
		const listing = document.querySelector('#listing');
		const pagination = document.querySelector("#pagination");

		listing.innerHTML = "";
		pagination.innerHTML = "";
		cars.forEach(car => {
			let tile = document.createElement('a');
			tile.classList.add('catalog_tile');
			tile.href = `http://localhost/project/public/car/${car[0]}`;
			let name = document.createElement('div');
			name.classList.add('car_name');
			name.innerHTML = car[1];

			let img = document.createElement('img');
			img.classList.add('catalog_car_image');
			img.src = `http://localhost/project/public/assets/${car[2]}.jpg`
			
			tile.append(img);
			tile.append(name);
			listing.append(tile);
		});

		if (body.current_page > 1) {
			let prev = document.createElement('button');
			prev.innerHTML = "&#60;Poprzednia strona";
			prev.addEventListener('click', () => {ajaxPostForm(`http://localhost/project/public/api_listing?page=${body.previous_page}`)});
			pagination.append(prev);
		}

		let pages = document.createElement("p");
		if (body.total_no_of_pages === 0) {
			pages.innerHTML = `Brak wyników !`;
		} else {
			pages.innerHTML = `Strona ${body.current_page} z ${body.total_no_of_pages}`;
		}
		pagination.append(pages);

		if (body.current_page < body.total_no_of_pages) {
			let next = document.createElement('button');
			next.innerHTML = "Nastepna strona &#62;";
			next.addEventListener('click', () => {ajaxPostForm(`http://localhost/project/public/api_listing?page=${body.next_page}`)});
			pagination.append(next);
		}		
	});
}
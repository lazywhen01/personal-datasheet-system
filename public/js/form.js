document.getElementById('citizenship').addEventListener('change', function () {
    var dualCitizenshipMethod = document.getElementById('dualCitizenshipMethod');
    var citizenshipCountryDropdown = document.getElementById('citizenshipCountryDropdown');

    if (this.value === 'Dual') {
        dualCitizenshipMethod.style.display = 'block';
        citizenshipCountryDropdown.style.display = 'block';
        // Fetch countries and populate the citizenship country dropdown
        fetchCountries();
    } else {
        dualCitizenshipMethod.style.display = 'none';
        citizenshipCountryDropdown.style.display = 'none';
    }
});

// Function to fetch countries and populate the dropdown
function fetchCountries() {
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            var citizenshipCountryDropdown = document.getElementById('citizenshipCountry');

            // Clear previous options
            citizenshipCountryDropdown.innerHTML = '<option selected>Choose a country</option>';

            // Populate the dropdown with countries
            data.forEach(country => {
                citizenshipCountryDropdown.innerHTML += `<option value="${country.name.common}">${country.name.common}</option>`;
            });
        })
        .catch(error => {
            console.error('Error fetching countries:', error);
        });
}
function formatGsis(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Truncate to 11 digits
    value = value.substring(0, 11);

    // Define the format
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 2 || i === 9) {
            formattedValue += '-';
        }
        formattedValue += value[i];
    }

    // Update the input value
    input.value = formattedValue;
}
function formatPagibig(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Truncate to 12 digits
    value = value.substring(0, 12);

    // Define the format
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 4 || i === 8) {
            formattedValue += '-';
        }
        formattedValue += value[i];
    }

    // Update the input value
    input.value = formattedValue;
}
function formatPhilHealth(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Truncate to 12 digits
    value = value.substring(0, 12);

    // Define the format
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 2 || i === 11) {
            formattedValue += '-';
        }
        formattedValue += value[i];
    }

    // Update the input value
    input.value = formattedValue;
}
function formatSSS(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Truncate to 10 digits
    value = value.substring(0, 10);

    // Define the format
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 2 || i === 9) {
            formattedValue += '-';
        }
        formattedValue += value[i];
    }

    // Update the input value
    input.value = formattedValue;
}
function formatTIN(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Truncate to 12 digits
    value = value.substring(0, 12);

    // Define the format
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i === 3 || i === 6 || i === 9) {
            formattedValue += '-';
        }
        formattedValue += value[i];
    }

    // Update the input value
    input.value = formattedValue;
}


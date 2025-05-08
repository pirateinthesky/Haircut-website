// Get the URL parameters
const params = new URLSearchParams(window.location.search);
const service = params.get('service');

// Define the service details
const services = {
    styling: {
        title: 'Free Styling',
        description: 'At Can Haircut, our expert hairdressers provide a complimentary styling consultation to determine the perfect look for your hair.'
    },
    branches: {
        title: '24/7 Branches',
        description: 'Can Haircut offers branches service that is available all day and night, every day of the week. No matter when an you need, our branches are ready to make your hair styled.'
    },
    haircutters: {
        title: 'Expert Haircutters',
        description: 'The haircutters at Can Haircut are highly skilled and have many years of experience. They are here to listen to your requests and provide you with the best hair style possible, ensuring you get the care you deserve.'
    },
    haircare: {
        title: 'Haircare Products',
        description: 'Can Haircut stocks a wide range of stylists to help you recover your hair and maintain its durability. Whether you have split ends or herbal hair dye, we have the right hair care products for you.'
    },
    chairs: {
        title: 'Chairs',
        description: 'At Can Haircut, your comfort comes first. Our massage chairs and refreshing beverages ensure a relaxing experience while you wait or get a haircut. Enjoy quality service in a space designed for your ease.'
    },
    totalcare: {
        title: 'Total Care',
        description: 'At Can Haircut, we believe in taking care of the whole person. Our total care services are designed to look after every aspect of your needs to specialized treatments, ensuring you always receive comprehensive care.'
    }
};

// Display the selected service content
if (services[service]) {
    document.getElementById('service-content').innerHTML = `
        <h3>${services[service].title}</h3>
        <p>${services[service].description}</p>
    `;
}

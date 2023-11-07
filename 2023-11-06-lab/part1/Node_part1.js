// Reg Expression for Email Address
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function validateEmail(email) {
    return emailRegex.test(email);
}

// Example:
const email = 'example@email.com';
if (validateEmail(email)) {
    console.log('Valid email address');
} else {
    console.log('Invalid email address');
}

// Reg Expression for Phone Number
const phoneRegex = /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;

function validatePhoneNumber(phoneNumber) {
    return phoneRegex.test(phoneNumber);
}

// Example:
const phoneNumber = '(617) 456 8790';
if (validatePhoneNumber(phoneNumber)) {
    console.log('Valid phone number');
} else {
    console.log('Invalid phone number');
}

// Reg Expression for Well-formed URL
const urlRegex = /^(ftp|http|https):\/\/[\w\-]+(\.[\w\-]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?/;

function validateURL(url) {
    return urlRegex.test(url);
}

// usage:
const url = 'https://www.example.com';
if (validateURL(url)) {
    console.log('Valid URL');
} else {
    console.log('Invalid URL');
}

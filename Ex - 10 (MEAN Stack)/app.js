// Load express module
const express = require('express');
const ejs = require('ejs');
const bodyParser = require('body-parser');

// Initialize app
const app = express();
// app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

app.use(express.static('public'));

const mongoose = require('mongoose');
mongoose.connect('mongodb://127.0.0.1:27017/testdb');
const db = mongoose.connection;

const Contact = require('./contact_schema');
console.log(Contact)

// Check for DB connection
db.once('open', function () {
    console.log("Connected to MongoDB successfully!");
});
db.on('error', function (err) {
    console.log(err);
});

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

app.post('/success', (req, res) => {
    const data = new Contact({
        name: req.body.name,
        email: req.body.email,
        message: req.body.message
    });
    // console.log(data);
    data.save()
        .then(() => {
            console.log('Message saved successfully!');
        })
        .catch(err => {
            console.log(err);
        });
    // console.log(data);
    console.log(data.name, data.email, data.message);
    res.send(`Message saved successfully!<br><br>Name: ${data.name}<br>Email: ${data.email}<br>Message: ${data.message}`);

});


// Start server with port 3000
app.listen(3000, function () {
    console.log("Server started on http://localhost:3000");
});

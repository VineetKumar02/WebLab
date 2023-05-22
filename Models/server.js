const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(bodyParser.json());

const port = 4000;
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});


// Connect to MongoDB
mongoose.connect('mongodb://127.0.0.1:27017/studentDB');

// Create a schema for student data
const studentSchema = new mongoose.Schema({
    name: String,
    age: Number,
    dept: String
}, { collection: 'student' });

// Create a model based on the schema
const Student = mongoose.model('Student', studentSchema);



// Handle form submission
app.post('/students', (req, res) => {
    const newStudent = new Student({
        name: req.body.name,
        age: req.body.age,
        dept: req.body.dept
    });

    newStudent.save()
        .then(() => {
            res.redirect('/');
        })
        .catch(err => {
            console.error(err);
            res.status(500).send('Error saving student data');
        });
});

// Retrieve student data
app.get('/students', (req, res) => {
    Student.find()
        .then(students => {
            res.json(students);
        })
        .catch(err => {
            console.error(err);
            res.status(500).send('Error retrieving student data');
        });
});

// Delete a student
app.delete('/students/:studentId', (req, res) => {
    const studentId = req.params.studentId;

    Student.findByIdAndDelete(studentId)
        .then(() => {
            res.sendStatus(204); // No Content
        })
        .catch(err => {
            console.error(err);
            res.status(500).send('Error deleting student');
        });
});

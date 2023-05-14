const express = require('express');
const app = express();
const cors = require('cors');

app.use(express.json());
app.use(cors());

app.post('/add', (req, res) => {
    const { num1, num2 } = req.body;
    const result = num1 + num2;
    res.send({ result });
});

app.post('/subtract', (req, res) => {
    const { num1, num2 } = req.body;
    const result = num1 - num2;
    res.send({ result });
});

app.post('/multiply', (req, res) => {
    const { num1, num2 } = req.body;
    const result = num1 * num2;
    res.send({ result });
});

app.post('/divide', (req, res) => {
    const { num1, num2 } = req.body;
    if (num2 === 0) {
        res.status(400).send({ error: "Cannot divide by zero" });
    } else {
        const result = num1 / num2;
        res.send({ result });
    }
});


const port = 3000;
app.listen(port, () => console.log(`Listening on port ${port}...`));

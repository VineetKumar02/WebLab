const express = require('express');
const app = express();
const cors = require('cors');

app.use(express.json());
app.use(cors());

const port = 3000;
app.listen(port, () => console.log(`Listening on port ${port}...`));

// Define the calculator API endpoint
app.get('/calculate/:operator/:num1/:num2', (req, res) => {
    const { operator, num1, num2 } = req.params;
  
    let result;
  
    switch (operator) {
      case 'add':
        result = Number(num1) + Number(num2);
        break;
      case 'subtract':
        result = Number(num1) - Number(num2);
        break;
      case 'multiply':
        result = Number(num1) * Number(num2);
        break;
      case 'divide':
        result = Number(num1) / Number(num2);
        break;
      default:
        return res.status(400).send({ error: 'Invalid operator' });
    }
  
    res.send({ result });
  });
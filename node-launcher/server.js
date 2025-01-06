const express = require('express');
const { exec } = require('child_process');

const app = express();
const PORT = 3001; // Change the port if needed

// Route to launch Discord
app.get('/launch-discord', (req, res) => {
  exec('"C:\\Users\\Gerry Untalan\\Desktop\\Discord.lnk"', (err) => {
    if (err) {
      console.error('Failed to open application:', err);
      res.status(500).send('Failed to launch application.');
    } else {
      console.log('Application launched successfully.');
      res.send('Application launched successfully.');
    }
  });
});

app.listen(PORT, () => console.log(`Node.js server running on http://localhost:${PORT}`));

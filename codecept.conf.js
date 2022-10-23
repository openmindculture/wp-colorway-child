const { setHeadlessWhen, setWindowSize } = require('@codeceptjs/configure');
exports.config = require ('./codecept.common.conf.js');
exports.config.helpers.Puppeteer.url = 'https://www.kleiderordnung-berlin.de'; // or 'http://localhost:1234';

// turn on headless mode when running with HEADLESS=true environment variable
// export HEADLESS=true && npx codeceptjs run
setHeadlessWhen(process.env.HEADLESS);

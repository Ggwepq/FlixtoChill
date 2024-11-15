<?php
/** Fill these out when you want to use the examples and rename or copy it to apikey.php */

// Specify the later introduced bearer token
define('TMDB_BEARER_TOKEN', 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwOTQxNDg0MzMyNWIzNWZiMDhjZGQ1Y2NiOWJlYjY1YyIsIm5iZiI6MTczMTY1ODkzOC4yODMwMzI3LCJzdWIiOiI2NzM2ZDlhZTcxZWY2Njk3OGNmYWZmZjgiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.wmhIo_zjMFMe011uH9D9cAAMSYJISjb7W_ie7uWl9Dc');

// Or specify the which I guess can now be considered "legacy api key".
define('TMDB_API_KEY', '09414843325b35fb08cdd5ccb9beb65c');

// Globals
define('TMDB_LANGUAGE', 'en-US');
define('TMDB_REGION', 'us');

// Session based
define('TMDB_REQUEST_TOKEN', 'TMDB_REQUEST_TOKEN');  // for accounts
define('TMDB_SESSION_TOKEN', 'TMDB_SESSION_TOKEN');  // for accounts
define('TMDB_GUEST_SESSION_TOKEN', 'TMDB_GUEST_SESSION_TOKEN');  // for guest sessions
define('TMDB_ACCOUNT_ID', 'TMDB_ACCOUNT_ID');  // numeric id, fetch through account info

// Account based
define('TMDB_LIST_ID', 'TMDB_LIST_ID');

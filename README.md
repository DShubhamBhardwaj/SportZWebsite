
# sportZ Website 

This project is a Sports Data Management System developed in PHP. It allows users to manage player information, view player statistics, and see details of ongoing matches. The application includes CRUD (Create, Read, Update, Delete) operations for managing player data and displays static data for player statistics and ongoing matches.


## Features

- CRUD operations for player management
- Display player statistics
- View details of ongoing matches
- Responsive design for better user experience



## Requirements

- PHP 7.x or higher
- Apache or any other web server
- MySQL (optional, if you decide to store data in a database)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/DShubhamBhardwaj/sportZWebsite.git
cd sportZWebsite

```

2.Set up the web server to serve the application. For example, if using Apache, add a virtual host for the project.

3. If using a database, create a database and import the provided SQL file:

```bash
CREATE DATABASE sports;
USE sports;
SOURCE database/sports.sql;
```
4. Configure the database connection in logconn.php:



    
## Usage

1. Start the web server (if not already running).

2. Open a web browser and go to the URL where the application is hosted (e.g., http://localhost/sports).

3. Use the application to:
- Add new players.
- View the list of players.
- Update player information.
- Delete players.
- View player statistics.
- See details of ongoing matches.

## Acknowledgements

 - [PHP](https://www.php.net/)
 - [Bootstrap](https://getbootstrap.com/)
